<?php

namespace TIST\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use TIST\Models\Posting;
use TIST\Models\Teacher\ServiceInformation as Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Teacher extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::saved(function($teacher){
            $request = new Request;
            $request = $request->capture();
            if ($request->hasFile('photo') && $request->file('photo')->isValid())
            {
                $file = $request->file('photo');
                $dirPath = public_path() . '/uploads/teachers/' . chunk_split(md5($teacher->id), '2','/');
                $fileName = Str::slug($teacher->name) . md5($teacher->id) . '.' . $file->getClientOriginalExtension();
                // dd($file->move($dirPath, $fileName));
                if($file->move($dirPath, $fileName)){
                    $teacher->photo = $fileName;
                    $teacher->save();
                }
            }

        });
    }

    protected $appends = ['photo_url'];


    public function getPhotoUrlAttribute()
    {
        return $this->photo ? chunk_split(md5($this->id) , 2, '/') . '/' . $this->photo : null;
    }


	public $with = [
		// 'qualification',
		// 'professionalQualification',
		// 'postings',
	];

    // protected $appends = ['props'];

    public static function paginateForPublic($name = null, $designation = null)
    {
        $query = self::leftJoin('professional_qualifications','professional_qualifications.id', '=', 'teachers.professional_qualification_id');
        $query->leftJoin('qualifications', 'qualifications.id','=','qualification_id')
            ->leftJoin('postings', function($join) {
                $join->on('postings.teacher_id','=', 'teachers.id')
                ->where('postings.current_post','=',1);
            })
            ->leftJoin('schools', function($join) {
                $join->on('postings.school_id','=', 'schools.id');
            })
            ->leftJoin('districts', function($join) {
                $join->on('schools.district_code','=', 'districts.code');
            })
            ->select(
                'professional_qualifications.name as professional_qualification',
                'types_of_teacher.name as designation',
                'teachers.name as name',
                'schools.name as school_name',
                'schools.id as school_id',
                'districts.name as district_name',
                'teachers.father_name',
                'teachers.id as teacher_id',
                'postings.place_of_post'
            )
            ->join('types_of_teacher', 'types_of_teacher.id','=','postings.type_of_teacher_id')
            // ->with('postings')
            ->orderBy('teachers.name')
            ;

        if($designation)
            $query->where('postings.type_of_teacher_id','=', $designation);


        if($name)
            $query->where('teachers.name', 'LIKE', '%' . $name . '%');

        return $query->paginate();
    }

    public static function findForPublic($id)
    {
        return self::with(['gender','postings' => function($q){$q->orderBy('date','DESC');}])->find($id);
    }

    public function paginateWithAllProperties($wheres=null)
    {
        $query = $this->with('postings','qualification','service','service.appointing_authority');
        if($wheres){
            foreach($wheres as $table => $q){
                if($table == 'teachers'){
                    foreach($q as $column_name=>$search_query){
                        if(!$search_query)
                            continue;

                        /**
                         * @todo Use join for on query
                         */
                        if(!is_array($search_query))
                            continue;
                        foreach($search_query as $query_type=>$value){
                            if($query_type == 'none')
                                continue;
                            if($query_type == 'in'){
                                if(is_array($value)){
                                    $query = $query->whereIn($column_name, $value);
                                }
                            }elseif($query_type == 'like'){
                                $query = strlen($value) ? $query->where($column_name, 'like', '%' . $value . '%') : $query;
                            }elseif($query_type == 'equal'){
                                $query = $query->where($column_name, '=', $value);
                            }
                        }
                    }
                }
            }
        }
        $query->where('current_nature_of_appointment_id','!=', 11)->orderBy('name', 'asc');

        return $query->paginate(50);
    }

    public function findWithAllProperties($id)
    {
        $props = $this->queryWithAllProperties()
                    ->where($this->getTable() .'.id', '=', $id)
                    ->first();
        if(!$props)
            app()->abort('404');

        $posting = new Posting;
        $service = new Service;

        $props->postings = $posting->queryWithAllProperties()
                                ->where('teacher_id',$id)
                                ->get();
        
        $props->service = $service->queryWithAllProperties()
                                ->where('teacher_id', $id)
                                ->first();
        $props->photo_url = $this->getPhotoUrlAttribute();
        
        return $props;
        // dd($props);
    }

    public function createNew($props)
    {   

        $teacher = $this;
        $teacher->name = $props['name'];
        $teacher->gender_id = $props['gender_id'];
        $teacher->father_name = $props['father_name'];
        $teacher->mother_name = $props['mother_name'];
        $teacher->marital_status_id = $props['marital_status_id'];
        $teacher->spouse_name = isset($props['spouse_name']) ? $props['spouse_name'] : null;

        $teacher->phone_number = $props['phone_number'];
        $teacher->mobile_number = $props['mobile_number'];
        $teacher->email = $props['email'];
        $teacher->present_address = $props['present_address'];
        $teacher->permanent_address = $props['permanent_address'];

        $teacher->epic_number = $props['epic_number'];
        $teacher->blood_group = $props['blood_group'];

        $teacher->date_of_birth = $props['date_of_birth'];
        $teacher->social_category_id = $props['social_category_id'];
        $teacher->disability_id = $props['disability_id'];

        $teacher->qualification_id = $props['qualification_id'];
        // $teacher->math_science_upto_id = $props['math_science_upto_id'];
        // $teacher->english_language_upto_id = $props['english_language_upto_id'];
        // $teacher->social_upto_id = $props['social_upto_id'];
        $teacher->professional_qualification_id = $props['professional_qualification_id'];
        $teacher->professional_qualification_year = isset($props['professional_qualification_year']) ? $props['professional_qualification_year'] : null;
        $teacher->trained_for_cwsn = isset($props['trained_for_cwsn']) ? 1 : 0;
        
        $teacher->current_nature_of_appointment_id = $props['current_nature_of_appointment_id'];
        
        $teacher->save();

        $teacher->postings()->create($props['posting']);
        if(isset($props['service']))
            $teacher->service()->create($props['service']);

        if(\Session::has('tempTeacher')){
            \Session::forget('tempTeacher');
        }

        return $teacher;
    }

    public function qrImage()
    {
        // $name = $this->name;
        // $address = $this->permanent_address;
        // $phone = $this->phone;
        // $email = $this->email;

        $name = urlencode('Liana Rarlte');
        $address = urlencode("Q-32, Kulikawn\nAizawl, Mizoram");
        $phone = urlencode('+918974005472');
        $email = urlencode('liana@gfail.com');

        return '<img class="ui centered '.$size.' image" src="/qr/' . $name .'/' . $address .'/' . $phone .'/'. $email . '">';
    }

    public function qualification()
    {
    	return $this->belongsTo('TIST\\Models\\Teacher\\Qualification', 'qualification_id');
    }

    public function gender()
    {
        return $this->belongsTo('TIST\\Models\\Teacher\\Gender', 'gender_id');
    }

    public function professionalQualification()
    {
    	return $this->belongsTo('TIST\\Models\\Teacher\\ProfessionalQualification');
    }

    public function postings()
    {
        return $this->hasMany('TIST\\Models\\Posting');
    }

    public function service()
    {
        return $this->hasOne('TIST\\Models\\Teacher\\ServiceInformation');
    }
    public function getPropertyValues($as_object = false)
    {
        $subjects = DB::table('subjects')->select('id','name',DB::Raw("'subjects' as 'type'"));
        $types_of_teacher = DB::table('types_of_teacher')->select('id','name',DB::Raw("'types_of_teacher' as 'type'"));
        $classes_taught = DB::table('classes_taught')->select('id','name',DB::Raw("'classes_taught' as 'type'"));
        $natures_of_appointment = DB::table('natures_of_appointment')->select('id','name',DB::Raw("'natures_of_appointment' as 'type'"));
        $qualifications = DB::table('qualifications')->select('id','name', DB::Raw("'qualifications' as 'type'"));
        $professional_qualifications = DB::table('professional_qualifications')->select('id','name', DB::Raw("'professional_qualifications' as 'type'"));
        $gpf_prefixes = DB::table('gpf_prefixes')->select('id','name', DB::Raw("'gpf_prefixes' as 'type'"));
        $pension_types = DB::table('pension_types')->select('id','name', DB::Raw("'pension_types' as 'type'"));
        $social_categories = DB::table('social_categories')->select('id','name', DB::Raw("'social_categories' as 'type'"));
        $marital_statuses = DB::table('marital_statuses')->select('id','name', DB::Raw("'marital_statuses' as 'type'"));
        $teacher_grades = DB::table('teacher_grades')->select('id','name', DB::Raw("'teacher_grades' as 'type'"));
        $genders = DB::table('genders')->select('id','name', DB::Raw("'genders' as 'type'"));
        $appointing_authorities = DB::table('appointing_authorities')->select('id','name', DB::Raw("'appointing_authorities' as 'type'"));
        $retirement_types = DB::table('retirement_types')->select('id','name', DB::Raw("'retirement_types' as 'type'"));
        $properties = DB::table('disabilities')
                    ->unionAll($subjects)
                    ->unionAll($types_of_teacher)
                    ->unionAll($classes_taught)
                    ->unionAll($natures_of_appointment)
                    ->unionAll($qualifications)
                    ->unionAll($professional_qualifications)
                    ->unionAll($gpf_prefixes)
                    ->unionAll($pension_types)
                    ->unionAll($social_categories)
                    ->unionAll($marital_statuses)
                    ->unionAll($teacher_grades)
                    ->unionAll($genders)
                    ->unionAll($appointing_authorities)
                    ->unionAll($retirement_types)
                    ->select(['id','name', DB::Raw("'disabilities' as 'type'")])
                    ->get();
        $properties = collect($properties)->groupBy('type');
        if($as_object == true)
            return $properties;

        foreach($properties as $key=>$items){
            $newCollection = [];
            foreach($items as $k=>$v){
                $newCollection[$v->id] = $v->name;
            }
            $properties[$key] = $newCollection;
        }

        return $properties;
    }

    public function queryWithAllProperties()
    {
        return DB::table($this->getTable())->leftJoin('genders','genders.id', '=', $this->getTable() . '.gender_id')
                            ->leftJoin('marital_statuses', 'marital_statuses.id', '=', $this->getTable() . '.marital_status_id')
                            ->leftJoin(DB::Raw('qualifications q'), 'q.id','=', $this->getTable() . '.qualification_id')
                            ->leftJoin(DB::Raw('qualifications q_ms'), 'q_ms.id','=', $this->getTable() . '.qualification_id')
                            ->leftJoin(DB::Raw('qualifications q_el'), 'q_el.id','=', $this->getTable() . '.qualification_id')
                            ->leftJoin(DB::Raw('qualifications q_s'), 'q_s.id','=', $this->getTable() . '.qualification_id')
                            ->leftJoin('professional_qualifications', 'professional_qualifications.id','=', $this->getTable() . '.qualification_id')
                            ->leftJoin('social_categories', 'social_categories.id','=', $this->getTable() . '.social_category_id')
                            ->leftJoin('disabilities', 'disabilities.id','=', $this->getTable() . '.disability_id')
                            ->select([
                                $this->getTable() . '.id',
                                $this->getTable() . '.name',
                                $this->getTable() . '.father_name',
                                $this->getTable() . '.mother_name',
                                $this->getTable() . '.mobile_number',
                                $this->getTable() . '.phone_number',
                                $this->getTable() . '.email',
                                $this->getTable() . '.epic_number',
                                $this->getTable() . '.spouse_name',
                                $this->getTable() . '.present_address',
                                $this->getTable() . '.permanent_address',
                                $this->getTable() . '.blood_group',
                                $this->getTable() . '.date_of_birth',
                                $this->getTable() . '.qualification_id',
                                $this->getTable() . '.english_language_upto_id',
                                $this->getTable() . '.social_upto_id',
                                $this->getTable() . '.math_science_upto_id',
                                $this->getTable() . '.professional_qualification_id',
                                $this->getTable() . '.professional_qualification_year',
                                $this->getTable() . '.current_nature_of_appointment_id',
                                $this->getTable() . '.trained_for_cwsn',
                                $this->getTable() . '.photo',
                                'genders.name as gender',
                                'q.name as qualification',
                                'q_ms.name as math_science_upto',
                                'q_el.name as english_language_upto',
                                'q_s.name as social_upto',
                                'marital_statuses.name as marital_status',
                                'professional_qualifications.name as professional_qualification',
                                'social_categories.name as social_category',
                                'disabilities.name as disability',
                                ]);
    }

    public function getSimilar($request)
    {
        $similar = $this
            ->where(\DB::Raw("REPLACE(REPLACE(name,' ',''), '.', '')"),'=', str_replace(' ', '', str_replace('.', '', $request->get('name'))))
            ->where(\DB::Raw("REPLACE(REPLACE(father_name,' ',''), '.', '')"), '=', str_replace(' ', '', str_replace('.', '', $request->get('father_name'))))
            ->where(\DB::Raw("REPLACE(REPLACE(mother_name,' ',''), '.', '')"), '=', str_replace(' ', '', str_replace('.', '', $request->get('mother_name'))))
            ->get()
            ;
        return $similar;
    }

    public function getReportBySchool($school_id)
    {
        $query = Posting::with('teacher')->where('current_post', '=', '1');

        if($school_id)
            $query->where('school_id', '=', $school_id);


        $postings = $query->get();
        
        return $postings;
    }

    public function getReportByCategory($category_id)
    {
        $query = $this->getReportsQuery();
        $rows = $this->getReportRows();

        return $query
            ->select($rows)
            ->where('school_categories.id', '=', $category_id)
            ->get();
    }

    public function getReportByQualification($qualification_id)
    {
        $query = $this->getReportsQuery();
        $rows = $this->getReportRows();

        return $query
            ->select($rows)
            ->where('teachers.qualification_id', '=', $qualification_id)
            ->get();
    }

    public function getReportByManagement($management_id)
    {
        $query = $this->getReportsQuery();
        $rows = $this->getReportRows();
        $rows[] = 'managements.name as management';

        return $query
            ->leftJoin('managements', 'managements.id', '=', 'schools.management_id_elementary')
            ->select($rows)
            ->where('schools.management_id_elementary', '=', $management_id)
            ->orWhere('schools.management_id_secondary', '=', $management_id)
            ->orWhere('schools.management_id_higher_secondary', '=', $management_id)
            ->get();
    }

    public function getReportBySubject($subject_id)
    {
        $query = $this->getReportsQuery();
        $rows = $this->getReportRows();
        return $query
            ->select($rows)
            ->where('postings.subject_of_appointment_id', '=', $subject_id)
            ->get();
    }

    public function getReportByAppointment($appointment_id)
    {
        $query = $this->getReportsQuery();
        $rows = $this->getReportRows();

        return $query
            ->select($rows)
            ->where('postings.nature_of_appointment_id', '=', $appointment_id)
            ->get();
    }

    public function getReportByGrade($grade)
    {
        $query = $this->getReportsQuery();
        // $query->leftJoin('service_informations', 'service_informations.teacher_id', '=' ,'postings.teacher_id');
        $rows = $this->getReportRows();
        $gradeYear = $grade == 'senior' ? 16 : 8;
        return $query
            ->select($rows)
            ->where('service_informations.date_of_appointment','!=', 'NULL')
            ->whereRaw("YEAR(service_informations.date_of_appointment) + {$gradeYear} >= YEAR(CURRENT_DATE())")
            ->get();
    }

    public function getReportByTrainingStatus($training_status)
    {
        $query = $this->getReportsQuery();
        $rows = $this->getReportRows();
        $rows[] = 'professional_qualifications.name as professional_qualification';

        $query = $query->join('professional_qualifications', 'professional_qualifications.id', '=' ,'teachers.professional_qualification_id');
        $query = $query
            ->select($rows);

        if($training_status == 'untrained')
            $query = $query
                ->where('teachers.professional_qualification_id', '=', '1');
        else
            $query = $query
                ->where('teachers.professional_qualification_id', '!=', '1');
                
        return $query->get();
    }

    public function getReportsQuery()
    {
        return DB::table('postings')
            ->leftJoin('natures_of_appointment','natures_of_appointment.id', '=', 'postings.nature_of_appointment_id')
            ->leftJoin('types_of_teacher','types_of_teacher.id', '=', 'postings.type_of_teacher_id')
            ->leftJoin('teachers','teachers.id', '=', 'postings.teacher_id')
            ->leftJoin('schools','schools.id', '=', 'postings.school_id')
            ->leftJoin('school_categories', 'school_categories.id', '=', 'schools.school_category_id')
            ->leftJoin('districts', 'districts.code', '=', 'schools.district_code')
            ->leftJoin('qualifications', 'qualifications.id', '=', 'teachers.qualification_id')
            ->join('service_informations', 'service_informations.teacher_id', '=' ,'postings.teacher_id');
    }

    public function getReportRows()
    {
        return [
            'teachers.id as teacher_id',
            'teachers.name as teacher_name',
            'schools.name as school_name',
            'qualifications.name as qualification',
            'postings.place_of_post as place_of_post',
            'types_of_teacher.name as type_of_teacher',
            'natures_of_appointment.name as nature_of_appointment',
            'teachers.father_name as father_name',
            'teachers.mobile_number as mobile_number',
            'teachers.phone_number as phone_number',
            'teachers.present_address as present_address',
            'teachers.permanent_address as permanent_address',
            'schools.code as school_code',
            'districts.name as district',
            'school_categories.name as category',
            DB::Raw("DATE_FORMAT(`teachers`.`date_of_birth`, '%D %b,%Y') as date_of_birth"),
            DB::Raw("DATE_FORMAT(`service_informations`.`date_of_appointment`, '%D %b,%Y') as date_of_appointment"),
        ];
    }
}
