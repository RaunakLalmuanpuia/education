<?php

namespace TIST\Http\Controllers;

use Illuminate\Http\Request;

use TIST\Http\Requests;
use TIST\Http\Controllers\Controller;

use TIST\Models\Teacher\ServiceInformation as Service;
use TIST\Models\Teacher\GpfPrefix;

class ServiceController extends Controller
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
        $service = Service::with('teacher')->find($id);
        
        $serviceAttributes = $request->get('service');

        $service->teacher_id = $serviceAttributes['teacher_id'];
        $service->date_of_appointment = $serviceAttributes['date_of_appointment'];
        $service->date_of_joining = isset($serviceAttributes['date_of_joining']) ? $serviceAttributes['date_of_joining'] : null;
        $service->date_of_confirmation = isset($serviceAttributes['date_of_confirmation']) ? $serviceAttributes['date_of_confirmation'] : null;
        $service->gpf_prefix_id = isset($serviceAttributes['gpf_prefix_id']) ? $serviceAttributes['gpf_prefix_id'] : null;
        $service->gpf_suffix = isset($serviceAttributes['gpf_suffix']) ? $serviceAttributes['gpf_suffix'] : null;
        $service->new_pension_scheme_number = isset($serviceAttributes['new_pension_scheme_number']) ? $serviceAttributes['new_pension_scheme_number'] : null;
        $service->pension_type_id = $serviceAttributes['pension_type_id'];
        $service->appointing_authority_id = $serviceAttributes['appointing_authority_id'];
        $service->rank_in_recruitment = isset($serviceAttributes['rank_in_recruitment']) ? $serviceAttributes['rank_in_recruitment'] : null;
        $service->grade = $serviceAttributes['grade'];
        $service->save();

        $teacher = $service->teacher;
        $teacher->touch();
        return [
                'success' => 'true',
                'data'    => ['teacher' => $teacher->findWithAllProperties($teacher->id)],
                'messages' => [
                    [
                        'status' => 'success',
                        'header' => 'Success',
                        'content'=> 'The service information for has been updated.',
                    ]
                ]];
        // foreach($request->except('_token') as $key=>$val){
        //     $teacher->$key = $val;
        // }
        // if($teacher->save()){
        //     return [
        //             'success' => 'true',
        //             'data'    => $teacher->findWithAllProperties($id),
        //             'messages' => [
        //                 [
        //                     'status' => 'success',
        //                     'header' => 'Success',
        //                     'content'=> 'The personal information for ' . $teacher->name . ' has been updated.',
        //                 ]
        //             ]];
        // }else{
        //     return [
        //             'success' => 'false',
        //             'messages' => [
        //                 [
        //                     'status' => 'error',
        //                     'header' => 'Error',
        //                     'content'=> 'The personal information for ' . $teacher->name . ' could not be updated.',
        //                 ]
        //             ]];
        // }
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
