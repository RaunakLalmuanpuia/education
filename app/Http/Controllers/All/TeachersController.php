<?php

namespace TIST\Http\Controllers\All;

use Illuminate\Http\Request;

use TIST\Http\Requests;
use TIST\Http\Controllers\Controller;
use TIST\Models\Teacher;
use Input;
class TeachersController extends Controller
{
    public function index(Teacher $model)
    {
    	$name = Input::get('name');
    	$district = Input::get('district');
    	$designation = Input::get('designation');
    	$properties = $model->getPropertyValues(true);

    	$designations = ['0' => 'All'];
    	foreach($properties['types_of_teacher'] as $p){
    		$designations[$p->id] = $p->name;
    	}
    	$teachers = Teacher::paginateForPublic($name, $designation);
    	return view('public.teachers', compact(
    		'teachers',
    		'name',
    		'designations',
    		'designation'
    		)
    	);
    }

    public function show($id)
    {
    	return view('public.teacher', ['teacher' => Teacher::findForPublic($id)]);
    }
}
