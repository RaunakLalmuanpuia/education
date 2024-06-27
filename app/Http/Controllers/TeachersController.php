<?php

namespace TIST\Http\Controllers;

use Illuminate\Http\Request;
use TIST\Http\Requests\TeacherRequest;
use TIST\Http\Requests;

use TIST\Http\Controllers\Controller;
use TIST\Models\Teacher;
use TIST\Models\Teacher\ServiceInformation;
use TIST\Models\Teacher\RetirementType;
use TIST\Models\Posting;
use DB;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Teacher $model, RetirementType $retirements)
    {
        // $filter = \Session::set('filter', null);
        $filter = \Session::get('filter', null);
        
        $is_advanced_search = \Session::get('is_advanced_search', null);
        $teachers = $model->paginateWithAllProperties($filter);
        $properties = $model->getPropertyValues(true);
        // dd($properties['natures_of_appointment']->toArray());
        // $teachers = $model->paginateWithAllProperties(['status' => 'active']);
        $retirements = $retirements->lists('name', 'id');
        return view('teachers.index', compact('teachers', 'is_advanced_search', 'retirements', 'properties','filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Teacher $teacher)
    {
        $properties = $teacher->getPropertyValues();
        return view('teachers.create', compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(TeacherRequest $request, Teacher $teacher, Posting $posting, ServiceInformation $service)
    {
        $similar = $teacher->getSimilar($request);
        
        if($request->get('confirmed') == 'true' ){
            if(\Session::get('tempTeacher'))
                $teacher = $teacher->createNew(\Session::get('tempTeacher'));
            return redirect()->route('teachers.show', ['id' => $teacher->id]);
        }

        if($similar->count()){
            \Session::set('tempTeacher', $request->except('_token') );
            return view('teachers.confirm', compact('similar'));
        }else{
            $teacher = $teacher->createNew($request->except('_token'));
            return redirect()->route('teachers.show', ['id' => $teacher->id]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id, Teacher $model)
    {
        $teacher = $model->findWithAllProperties($id);

        view()->share('pageTitle', $teacher->name);

        $current_post = null;
        foreach ($teacher->postings as $key => $posting) {
            if($posting->current_post)
                $current_post = $posting;
        }
        return view('teachers.show', compact('teacher','current_post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Teacher $teacher, $id)
    {
        // return null;
        $teacher = $teacher->find($id);
        $properties = $teacher->getPropertyValues();
        return view('teachers.edit', compact('properties', 'teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(TeacherRequest $request, $id)
    {
        $teacher = Teacher::find($id);

        foreach($request->except('_token') as $key=>$val){
            $teacher->$key = $val;
        }
        if($teacher->save()){
            return [
                    'success' => 'true',
                    'data'    => ['teacher' => $teacher->findWithAllProperties($id)],
                    'messages' => [
                        [
                            'status' => 'success',
                            'header' => 'Success',
                            'content'=> 'The personal information for ' . $teacher->name . ' has been updated.',
                        ]
                    ]];
        }else{
            return [
                    'success' => 'false',
                    'messages' => [
                        [
                            'status' => 'error',
                            'header' => 'Error',
                            'content'=> 'The personal information for ' . $teacher->name . ' could not be updated.',
                        ]
                    ]];
        }

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

    public function search()
    {

        \Session::set('filter', \Input::get('filter'));

        if(!\Input::get('advanced_search')){
            $s = \Session::get('filter');
            if(isset($s['teachers']['name'])){
                $newFilter['teachers']['name'] = $s['teachers']['name'];
            }
            if(isset($s['teachers']['father_name'])){
                $newFilter['teachers']['father_name'] = $s['teachers']['father_name'];
            }
            if(isset($s['teachers']['mother_name'])){
                $newFilter['teachers']['mother_name'] = $s['teachers']['mother_name'];
            }
            if(isset($s['teachers']['current_nature_of_appointment_id'])){
                $newFilter['teachers']['current_nature_of_appointment_id'] = $s['teachers']['current_nature_of_appointment_id'];      
            }
            if(isset($s['postings']['schools']['district_id'])){
                $newFilter['postings']['schools']['district_id'] = $s['postings']['schools']['district_id'];    
            }
            if(isset($s['postings']['schools']['name'])){
                $newFilter['postings']['schools']['name'] = $s['postings']['schools']['name'];    
            }
        }
        \Session::set('is_advanced_search', \Input::get('advanced_search'));
        return redirect()->action('TeachersController@index');
    }
    public function resetSearch()
    {
        if(\Session::has('filter'))
            \Session::set('filter', null);
        if(\Session::has('is_advanced_search'))
            \Session::set('is_advanced_search', null);

        return redirect()->action('TeachersController@index');
    }

    public function abstractList(ServiceInformation $serviceInformation)
    {
        $selectedYear = \Input::get('year', date('Y'));
        $type = \Input::get('type', 'pension');
        $query = DB::table('service_informations')
                ->join('teachers', 'service_informations.teacher_id', '=' ,'teachers.id');
        if($type == 'selection'){
            $query->where(DB::Raw("YEAR(`date_of_appointment`) + 16"), "=", $selectedYear);
            $query->orderBy('service_informations.date_of_appointment', "ASC");
        }elseif($type == 'senior'){
            $query->where(DB::Raw("YEAR(`date_of_appointment`) + 8"), "=", $selectedYear);
            $query->orderBy('service_informations.date_of_appointment', "ASC");
        }else{
            $query->where(DB::Raw("YEAR(`teachers`.`date_of_birth`) + 60"), "=", $selectedYear);
            $query->orderBy('teachers.date_of_birth', "ASC");
        }

        $query->select('name', 'date_of_birth', 'date_of_appointment', 'date_of_joining', 'teacher_id');
        $query->distinct();
        $selectionYears = DB::table('service_informations')
            ->select(DB::Raw('YEAR(`date_of_appointment`) + 8 as year'))
            ->distinct('year')
            ->where(DB::Raw('YEAR(`date_of_appointment`)'), '!=', '')
            ->orderBy('date_of_appointment', 'ASC')
            ->lists('year','year');
        
        $seniorYears = DB::table('service_informations')
            ->select(DB::Raw('YEAR(`date_of_appointment`) + 16 as year'))
            ->distinct('year')
            ->where(DB::Raw('YEAR(`date_of_appointment`)'), '!=', '')
            ->orderBy('date_of_appointment', 'ASC')
            ->lists('year','year');

        $years = array_merge($selectionYears, $seniorYears);
        $pensionYears = DB::table('teachers')
            ->select(DB::Raw('YEAR(`date_of_birth`) + 60 as year'))
            ->distinct('year')
            ->where(DB::Raw('YEAR(`date_of_birth`)'), '!=', '')
            ->orderBy('date_of_birth', 'ASC')
            ->lists('year','year');
        $years = array_merge($years, $pensionYears);
        $services = $query->paginate(50);
        return view('teachers.list', compact('services','type', 'years', 'selectedYear'));
    }
}
