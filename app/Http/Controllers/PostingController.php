<?php

namespace TIST\Http\Controllers;

use Illuminate\Http\Request;

use TIST\Http\Requests;
use TIST\Http\Controllers\Controller;
use TIST\Models\Posting;
use TIST\Models\School;
use TIST\Models\School\Statistics\ConsolidatedDistrictInfo;
use TIST\Models\Teacher;
use TIST\Models\Teacher\ServiceInformation as Service;

class PostingController extends Controller
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
    public function store(
        Request $request,
        Posting $model,
        Service $service,
        School $schoolModel,
        ConsolidatedDistrictInfo $consolidatedDistrictInfo)
    {
        $postingParams = $request->get('posting');
        $teacher = Teacher::find($postingParams['teacher_id']);

        if($teacher->status == 'inactive'){
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
        }

        
        // $params = $request->except('_token', 'service', 'school_name', 'gpf_prefix', 'gpf_suffix');

        $oldPosting = $model->where('teacher_id', '=', $postingParams['teacher_id'])->where('current_post', '=', 1)->first();
        if($oldPosting){
            $oldPosting->current_post = 0;
            $oldPosting->save();
        } 

        $posting = new Posting;
        $posting->school_id = $postingParams['school_id'];
        $posting->place_of_post = isset($postingParams['place_of_post']) ? $postingParams['place_of_post'] : null;
        $posting->teacher_id = $postingParams['teacher_id'];
        $posting->type_of_teacher_id = $postingParams['type_of_teacher_id'];
        $posting->nature_of_appointment_id = $postingParams['nature_of_appointment_id'];
        $posting->subject_of_appointment_id = $postingParams['subject_of_appointment_id'];
        $posting->date = $postingParams['date'];
        $posting->classes_taught_id = $postingParams['classes_taught_id'];
        $posting->status = 0;
        $posting->current_post = 1;
        $posting->save();

        /**
         * Update district consolidated data
         */
        $school = $schoolModel->find($postingParams['school_id']);

        $consolidatedNeedChange = true;
        if($oldPosting){
            $oldSchool = $schoolModel->find($oldPosting->school_id);
            if($oldSchool && $oldSchool->district_code == $school->district_code ) {
                $consolidatedNeedChange = false;
            }
        }

        $consInfo = $consolidatedDistrictInfo->where('year','=', date('Y', strtotime($posting->date)))->first();
        $districtsInfo = json_decode($consInfo->info);

        /**
         * teacher transfered to another district
         */
        if($consolidatedNeedChange){
            foreach(get_object_vars($districtsInfo) as $k=>$v){
                if($k != $school->district_code){
                    if($oldPosting && $oldSchool && $oldSchool->district_code != $k){
                        continue;
                    }
                    if($oldPosting && $oldSchool && $oldSchool->district_code == $k){
                        $this->updateDistrictInfo($teacher, $districtsInfo, $k, $posting, $consInfo);
                    }
                    continue;
                }
                $this->updateDistrictInfo($teacher, $districtsInfo, $k, $posting, $consInfo);                
            }
        }
        dd($consolidatedNeedChange);
        if($request->get('service')){
            $service = new Service;
            $params = $request->get('service');
            
            $service->teacher_id = $teacher->id;
            $service->date_of_appointment = $params['date_of_appointment'];
            $service->date_of_joining = isset($params['date_of_joining']) ? $params['date_of_joining'] : null;
            $service->date_of_confirmation = isset($params['date_of_confirmation']) ? $params['date_of_confirmation'] : null;
            $service->gpf_prefix_id = isset($params['gpf_prefix_id']) ? $params['gpf_prefix_id'] : null;
            $service->gpf_suffix = isset($params['gpf_suffix']) ? $params['gpf_suffix'] : null;
            $service->new_pension_scheme_number = isset($params['new_pension_scheme_number']) ? $params['new_pension_scheme_number'] : null;
            $service->pension_type_id = $params['pension_type_id'];
            $service->appointing_authority_id = $params['appointing_authority_id'];
            $service->rank_in_recruitment = $params['rank_in_recruitment'];
            $service->grade = $params['grade'];
            $service->save();
        }

        $teacher->current_nature_of_appointment_id = $postingParams['nature_of_appointment_id'];
        $teacher->save();
        return [
            'success'=>true,
            'data' => ['teacher' => $teacher->findWithAllProperties($teacher->id)],
            'messages' => [
                [
                    'status' => 'success',
                    'header' => 'Success',
                    'content'=> 'Service status successfully updated for ' . $teacher->name . '. It will need approval.',
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

    public function updateDistrictInfo($teacher, $districtsInfo, $k, $posting, $consInfo)
    {
        if($teacher->gender_id == 1)
            $districtsInfo->$k->data->tch_m = $districtsInfo->$k->data->tch_m + 1;
        else
            $districtsInfo->$k->data->tch_f = $districtsInfo->$k->data->tch_f + 1;

        $districtsInfo->$k->data->tch_t = $districtsInfo->$k->data->tch_t + 1;

        if( in_array($posting->classes_taught_id, [1,3])) {
            $districtsInfo->$k->data->tchpri = $districtsInfo->$k->data->tchpri + 1;
        }elseif( in_array($posting->classes_taught_id, [2,3]) ){
            $districtsInfo->$k->data->tchupr = $districtsInfo->$k->data->tchupr + 1;
        }elseif($posting->classes_taught_id == 4){
            $districtsInfo->$k->data->tchsec = $districtsInfo->$k->data->tchsec + 1;
        }elseif($posting->classes_taught_id == 5){
            $districtsInfo->$k->data->tchhsec = $districtsInfo->$k->data->tchhsec + 1;
        }else{
            $districtsInfo->$k->data->tchpart = $districtsInfo->$k->data->tchpart + 1;
        }
        $consInfo->info = json_encode($districtsInfo);
        $consInfo->save();
    }
}
