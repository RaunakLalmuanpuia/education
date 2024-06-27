<?php

namespace TIST\Http\Controllers;

use Illuminate\Http\Request;

use TIST\Http\Requests;
use TIST\Http\Controllers\Controller;
use TIST\Models\Teacher;
use TIST\Models\School;
use TIST\Models\School\ConsolidatedEnrollment;
use TIST\Models\School\Category;
use TIST\Models\Posting;
use TIST\Models\Import;

use Input;
use Response;

class AjaxController extends Controller
{
    public function getTeacherProperties(Teacher $teacher)
    {
    	return $teacher->getPropertyValues();
    }

    public function getSchoolsByLocation(School $school)
    {
        $locationType = Input::get('type');
        $locationCode = Input::get('code');
    	$schools = $school->getSchoolsByLocation($locationType, $locationCode);
    	return Response::json($schools);
    }

    public function getSchoolDetail()
    {
        $id=Input::get('id');
        $schoolModel = new School(); // Refine columns using select();
        $postings = Posting::with('teacher')
            ->where('school_id', '=', $id)
            ->where('current_post', '=', 1)
            ->get();
        $postings = $postings->filter(function($item){
            $date = new \DateTime($item->teacher->date_of_birth);
            $pension = $date->add(new \DateInterval('P60Y'));
            $newDate = new \DateTime();
            return  $pension > $newDate;
        });
        $totalTeachers = count($postings);

        $school = $schoolModel->queryWithAllProperties()->where('schools.id', '=', $id)->first();
        
        if(!$school)
            $school = $schoolModel->find($id);
        // $categories = Category::lists('name', 'id');

        $schoolTotals = getTotalsForSchool($school);

        $totalBoys = $schoolTotals['totalBoys'];
        $totalGirls = $schoolTotals['totalGirls'];
        $totalStudents = $schoolTotals['totalStudents'];
        $totals = $schoolTotals['totals'];

        $html = view(
            'schools.map-info',
            compact(
                'school',
                'totals',
                'totalBoys',
                'totalGirls',
                'totalTeachers',
                'totalStudents',
                'postings'
                )
            );
        return $html;
        // return Response::json();
    }

    public function getSchoolHistory($school_id, School $school){
        $school = $school->with('consolidatedEnrollments')->find($school_id);
        // $results = ConsolidatedResults::history($school_id);
        // dd($school);
        return compact(
            // 'results',
            'school'
            );
    }


    private function getTotalForClasses($school, $class)
    {
        $classGirls = 'c' . $class . '_g';
        $classBoys = 'c' . $class . '_b';
        return $school->$classGirls + $school->$classBoys;
    }

    public function importProgress(Request  $request, Import $importModel)
    {
        $id = $request->get('id');
        $import = $importModel->find($id);
        return $import;
    }

}
