<?php

namespace TIST\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Posting extends Model
{

    public $guarded = [];

    public $with = [
        'school',
        'classesTaught',
        'typeOfTeacher',
        'natureOfAppointment',
        'subjectOfAppointment',
    ];

    public function createNew($properties, $teacher)
    {
        $this->school_id = $properties['school_id'];
        $this->place_of_post = isset($properties['place_of_post']) ? $properties['place_of_post'] : null;
        $this->teacher_id = $teacher->id;
        $this->type_of_teacher_id = $properties['type_of_teacher_id'];
        $this->nature_of_appointment_id = $properties['nature_of_appointment_id'];
        $this->subject_of_appointment_id = $properties['subject_of_appointment_id'];
        $this->date = $properties['date'];

        $this->classes_taught_id = $properties['classes_taught_id'];

        return $this->save();
    }

    public function queryWithAllProperties()
    {
        return DB::table($this->getTable())
            ->leftJoin('schools','schools.id','=','postings.school_id')
            ->leftJoin('districts','schools.district_code','=','districts.code')
            ->leftJoin('villages','schools.village_code','=','villages.code')
            // ->leftJoin('managements', 'schools.management_id', '=','managements.id')
            ->leftJoin('natures_of_appointment', 'postings.nature_of_appointment_id', '=','natures_of_appointment.id')
            ->leftJoin('subjects', 'postings.subject_of_appointment_id', '=','subjects.id')
            ->leftJoin('types_of_teacher', 'postings.type_of_teacher_id', '=','types_of_teacher.id')
            ->orderBy('date','DESC')
            ->select([
                'schools.name as school_name',
                'schools.head_phone_number_mobile',
                'schools.head_phone_number_landline',
                'schools.respondent_phone_number_mobile',
                'schools.respondent_phone_number_landline',
                'districts.name as district_name',
                'villages.name as village_name',
                // 'managements.name as management',
                'postings.id',
                'postings.date',
                'postings.place_of_post',
                'postings.school_id',
                'postings.nature_of_appointment_id',
                'postings.current_post',
                'subjects.name as subject',
                'types_of_teacher.name as type_of_teacher',
                'natures_of_appointment.name as nature_of_appointment',
                ]);
    }

    public function teacher()
    {
        return $this->belongsTo('TIST\\Models\\Teacher');
    }

    public function school()
    {
        return $this->belongsTo('TIST\\Models\\School');
    }

    public function classesTaught()
    {
        return $this->belongsTo('TIST\\Models\\Teacher\\TaughtClass');
    }

    public function subjectOfAppointment()
    {
        return $this->belongsTo('TIST\\Models\\Teacher\\Subject');
    }

    public function natureOfAppointment()
    {
        return $this->belongsTo('TIST\\Models\\Teacher\\NatureOfAppointment');
    }

    public function typeOfTeacher()
    {
        return $this->belongsTo('TIST\\Models\\Teacher\\TypeOfTeacher');
    }
}
