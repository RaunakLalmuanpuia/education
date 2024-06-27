<?php
namespace TIST\Http\Controllers\All;

use Illuminate\Http\Request;

use TIST\Http\Requests;
use TIST\Http\Controllers\Controller;
use TIST\Models\School;
use TIST\Models\Posting;
use TIST\Models\Locations\District;
use TIST\Models\School\Category;

class SchoolsController extends Controller
{
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

        $districts = ['0'=>'Select District'];
        $districts = $districts + $districtModel->lists('name', 'code')->toArray();
        $categories = ['0'=>'Select Category'];
        $categories = $categories + $categoryModel->lists('name', 'id')->toArray();

        $schools = $schoolModel->paginateForIndex(date('Y'), $search);

    	return view('public.schools', compact('schools','categories','districts','category','district','name'));
    }

    public function show($id, School $schoolModel)
    {
        $school = $schoolModel->queryWithAllProperties()->where('schools.id','=',$id)->first();
        $postings = Posting::with('teacher', 'teacher.service')
            ->where('school_id', '=', $id)
            ->where('current_post', '=', 1)
            ->orderBy('current_post','DESC')
            ->get();
        $totalTeachers = $postings->count();
        view()->share('pageTitle', $school->name);
        // dd($postings);
        $postings = $postings->filter(function($item){
            $date = new \DateTime($item->teacher->date_of_birth);
            $pension = $date->add(new \DateInterval('P60Y'));
            $newDate = new \DateTime();
            return  $pension > $newDate;
        });

        $schoolTotals = getTotalsForSchool($school);
        return view('public.school',
            compact(
                'school',
                'schoolTotals',
                'totalTeachers',
                'postings'
            )
        );
    }

    public function map()
    {
        
    }
}
