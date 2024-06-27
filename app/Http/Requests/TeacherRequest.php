<?php

namespace TIST\Http\Requests;

use TIST\Http\Requests\Request;

class TeacherRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'email' => 'email',
            'date_of_birth' => 'required',
            'spouse_name' => 'required_if:marital_status_id,2',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'service.date_of_appointment' => 'required_if:current_nature_of_appointment_id,1',
            'service.pension_type_id' => 'required_if:current_nature_of_appointment_id,1',
            'posting.school_id' => 'required_if:is_create,1',
            'posting.date' => 'required_if:is_create,1',
            'posting.place_of_post' => 'required_if:post_different_from_school,on',
        ];

        if($this->get('professional_qualification_id') != 1 ){
            $rules['professional_qualification_year'] = 'required';
        }

        return $rules;
    }
}
