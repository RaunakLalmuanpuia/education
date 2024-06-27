<?php

namespace TIST\Http\Controllers;

use Illuminate\Http\Request;

use TIST\Http\Requests;
use TIST\Http\Controllers\Controller;
use TIST\Models\School;
use TIST\Models\Locations\District;
use TIST\Models\Locations\EducationalBlock;
use TIST\Models\Locations\Village;
use TIST\Models\Posting;
use TIST\Models\School\Category;
use TIST\Models\School\Statistics\ConsolidatedDistrictInfo;
use TIST\Models\Import;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(School $schoolModel, District $districtModel, Category $categoryModel)
    {
        $name = \Input::get('name');
        $district = \Input::get('district');
        $category = \Input::get('category');

        $search = [];

        if($name)
            $search[] = ['column' => 'schools.name', 'condition' => 'LIKE', 'value' => '%' . $name . '%'];
        if($district)
            $search[] = ['column' => 'district_code', 'condition' => '=', 'value' => $district];
        if($category)
            $search[] = ['column' => 'school_category_id', 'condition' => '=', 'value' => $category];

        $schools = $schoolModel->paginateForIndex(date('Y'), $search);
        $districts = ['0'=>'Select District'];
        $districts = $districts + $districtModel->lists('name', 'code')->toArray();
        $categories = ['0'=>'Select Category'];
        $categories = $categories + $categoryModel->lists('name', 'id')->toArray();

        return view('schools.index', compact('schools','categories','districts','category','district','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id, School $schoolModel)
    {
        $school = $schoolModel->queryWithAllProperties()->where('schools.id','=',$id)->first();
        // $school = $schoolModel->with('consolidatedEnrollments')->first();
        if(!$school){
            $school = $schoolModel->find($id);
            $school->school_id = $school->id;
        }

        view()->share('pageTitle', $school->name);

        $schoolTotals = getTotalsForSchool($school);

        /**
         * @todo  Replace with custom query
         */
        $postings = Posting::with('teacher', 'teacher.service')
            ->where('school_id', '=', $id)
            ->where('current_post', '=', 1)
            ->orderBy('current_post','DESC')
            ->get();
        // dd($postings);
        $postings = $postings->unique('teacher_id');//->groupBy('current_post');
        $postings = $postings->filter(function($item){
            $date = new \DateTime($item->teacher->date_of_birth);
            $pension = $date->add(new \DateInterval('P60Y'));
            $newDate = new \DateTime();
            return  $pension > $newDate;
        });
        $totalTeachers = $postings->count();
        return view('schools.show',
            compact(
                'school',
                'schoolTotals',
                'postings',
                'totalTeachers'
                )
            );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function searchSchool($term)
    {
        $schools = School::where('name', 'like', '%' . $term . '%')
            ->orWhere('name', 'like', '%' . $term . '%')
            ->get();
        $results = [];

        foreach($schools as $school){
            $results[] = [
                'title' => $school->name . ($school->district ? ',' . $school->district->name : ''),
                'code' => $school->code,
                'school_id' => $school->id,
                'district' => $school->district ? $school->district->name : ''
            ];
        }

        return \Response::json(['results' => $results]);
    }

    public function getImport()
    {
        \View::share('pageTitle', 'Import School Statistics');
        return view('schools.import');
    }

    public function map(ConsolidatedDistrictInfo $info)
    {
        \View::share('pageTitle', 'District Overview on Map');
        $districtData = $info->where('year','=', date('Y'))->where('type','=','enrollment')->first();
        // dd($districtData);
        return view('schools.map', compact('districtData'));
    }

    public function mapDistrict($districtCode, School $schoolsModel)
    {
        // $schools = $schoolsModel
        //     ->with('consolidatedEnrollments')
        //     ->with('district')
        //     ->with('village')
        //     ->with('cluster')
        //     ->with('educational_block')
        //     ->where('district_code', '=',$code)
        //     ->get();
        // d($schools);
        $districts = District::lists('name','code');
        $blocks = json_encode(EducationalBlock::select(['name','code'])->get());
        $villages = json_encode(Village::select(['name','code'])->get());
        return view(
            'schools.map',
            compact(
                'districtCode',
                'districts',
                'blocks',
                'villages'
                )
            );
    }

    public function postImport(Request $request)
    {
        chdir(realpath(app_path() . '/../'));
        $import = new Import;
        $import->start = date('Y-m-d h-j-s');

        $directoryName = public_path() . '/uploads/';
        $fileName = time() . '.csv';

        if($request->hasFile('school_file')){
            $file = $request->file('school_file');

            $import->type = 'school';
            $import->save();
            $request->file('school_file')->move($directoryName , $fileName);

            exec("php artisan import:school " . $directoryName . $fileName . ' ' . $import->id . ' > /dev/null &');
        }
        if($request->hasFile('enrollment_file')){
            $this->validate($request, ['year'=>'required']);
            $file = $request->file('enrollment_file');

            $import->type = 'enrollment';
            $import->save();
            $request->file('enrollment_file')->move($directoryName , $fileName);
            
            exec("php artisan import:enrollment " . $request->get('year') . " " . $directoryName . $fileName . ' ' . $import->id . " > /dev/null &");
        }
        if($request->hasFile('latlong_file')){
            $file = $request->file('latlong_file');

            $import->type = 'latlong';
            $import->save();
            $request->file('latlong_file')->move($directoryName , $fileName);

            exec("php artisan import:latlong " . $directoryName . $fileName. ' ' . $import->id . " > /dev/null &");
        }
        return redirect()->route('import-status', ['id'=> $import->id]);
    }

    public function importStatus($id)
    {
        return view('schools.import-status', compact('id'));
    }

}
