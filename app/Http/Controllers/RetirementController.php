<?php

namespace TIST\Http\Controllers;

use Illuminate\Http\Request;

use TIST\Http\Requests;
use TIST\Http\Controllers\Controller;
use TIST\Models\Teacher\Retirement;
use TIST\Models\Teacher;

class RetirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Requests\RetirementRequest $request, Teacher $teacher)
    {
        $teacher_id = $request->get('teacher_id', null);

        if(!$teacher_id)
            return view('errors.404', ['message'=>'Teacher id is required']);

        $teacher = $teacher->find($teacher_id);
        return view('retirement.create', compact('teacher'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, Retirement $model)
    {
        $teacher = Teacher::find($request->get('teacher_id'));
        if($teacher->status == 'inactive')  
            return [
                'success' => false,
                'data'    => null,
                'messages' => [
                    [
                        'status' => 'error',
                        'header' => 'Error',
                        'content'=> $teacher->name . ' is already retired.',
                    ]
                ]
            ];
        $retirement = $model->create($request->except('_token'));
        return [
            'success'=>true,
            'data' => $retirement,
            'messages' => [
                [
                    'status' => 'success',
                    'header' => 'Success',
                    'content'=> 'Retirement successfully made for ' . $retirement->teacher->name . '. It will need approval.',
                ]
            ]
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
}
