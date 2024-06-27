<?php

namespace TIST\Models;

use TIST\Models\School\ConsolidatedEnrollment as Enrollment;
use Illuminate\Database\Eloquent\Model;
use DB;

class School extends Model
{
    public function village()
    {
        return $this->belongsTo('TIST\\Models\\Locations\\Village', 'village_code', 'code');
    }
    
    public function district()
    {
        return $this->belongsTo('TIST\\Models\\Locations\\District', 'district_code', 'code');
    }
    
    public function cluster()
    {
        return $this->belongsTo('TIST\\Models\\Locations\\Cluster', 'cluster_code', 'code');
    }
    
    public function educational_block()
    {
        return $this->belongsTo('TIST\\Models\\Locations\\EducationalBlock', 'educational_block_code', 'code');
    }
    
    public function postings()
    {
    	return $this->hasMany('TIST\\Models\\Posting');
    }
    public function consolidatedEnrollments()
    
    {
        return $this->hasMany('TIST\\Models\\School\\ConsolidatedEnrollment');
    }

    public function elementaryManagement()
    {
        return $this->belongsTo('TIST\\Models\\School\\Management', 'management_id_elementary');
    }

    public function secondaryManagement()
    {
        return $this->belongsTo('TIST\\Models\\School\\Management', 'management_id_secondary');
    }

    public function higherManagement()
    {
        return $this->belongsTo('TIST\\Models\\School\\Management', 'management_id_higher_secondary');
    }


    public function category()
    {
        return $this->belongsTo('TIST\\Models\\School\\Category', 'school_category_id');
    }
    protected $fillable = ['code'];

    


    /**CUSTOM FUNCTIONS**/

    /**
     * Paginate schools for index.
     */
    public function paginateForIndex($year = null, $conditions = [])
    {
        $query = $this->queryWithAllProperties($year);
        if(count($conditions)){
            // dd($conditions);
            foreach($conditions as $condition){
                $query->where($condition['column'], $condition['condition'], $condition['value']);
            }
        }
        return $query->paginate();
    }

    public function queryWithAllProperties($year = null)
    {
        if(!$year){
            $year = DB::table('consolidated_enrollments')->select('year')->orderBy('created_at', 'DESC')->pluck(1);
        }
        
        return $this
            ->leftJoin('districts','districts.code', '=', $this->getTable() . '.district_code')
            ->leftJoin('clusters', 'clusters.code', '=', $this->getTable() . '.cluster_code')
            ->leftJoin('school_categories', 'school_categories.id', '=', $this->getTable() . '.school_category_id')
            ->leftJoin('educational_blocks', 'educational_blocks.code', '=', $this->getTable() . '.educational_block_code')
            ->leftJoin('habitations', 'habitations.code', '=', $this->getTable() . '.habitation_code')
            ->leftJoin('villages', 'villages.code', '=', $this->getTable() . '.village_code')
            ->leftJoin('panchayats', 'panchayats.code', '=', $this->getTable() . '.panchayat_code')
            ->leftJoin('consolidated_enrollments', 'consolidated_enrollments.school_id', '=', $this->getTable() . '.id')
            ->where('consolidated_enrollments.year','=', $year)
            ->select([
                $this->getTable() . '.id',
                $this->getTable() . '.name',
                $this->getTable() . '.pincode',
                $this->getTable() . '.pincode',
                $this->getTable() . '.school_category_id',
                $this->getTable() . '.head_phone_number_landline',
                $this->getTable() . '.head_phone_number_mobile',
                $this->getTable() . '.respondent_phone_number_landline',
                $this->getTable() . '.respondent_phone_number_mobile',
                $this->getTable() . '.website',
                $this->getTable() . '.email',
                $this->getTable() . '.management_id_elementary',
                $this->getTable() . '.management_id_secondary',
                $this->getTable() . '.management_id_higher_secondary',
                $this->getTable() . '.established_year',
                $this->getTable() . '.is_cswn',
                $this->getTable() . '.code',
                $this->getTable() . '.latitude',
                $this->getTable() . '.longitude',
                DB::Raw('consolidated_enrollments.*'),
                // DB::Raw('consolidated_enrollments.cpp_g + consolidated_enrollments.cpp_b + consolidated_enrollments.c1_b + consolidated_enrollments.c1_g + consolidated_enrollments.c2_b + consolidated_enrollments.c2_g + consolidated_enrollments.c3_b + consolidated_enrollments.c3_g + consolidated_enrollments.c4_b + consolidated_enrollments.c4_g + consolidated_enrollments.c5_b + consolidated_enrollments.c5_g + consolidated_enrollments.c6_b + consolidated_enrollments.c6_g + consolidated_enrollments.c7_b + consolidated_enrollments.c7_g + consolidated_enrollments.c8_b + consolidated_enrollments.c8_g + consolidated_enrollments.c9_b + consolidated_enrollments.c9_g + consolidated_enrollments.c10_b + consolidated_enrollments.c10_g + consolidated_enrollments.c11_b + consolidated_enrollments.c11_g + consolidated_enrollments.c12_b + consolidated_enrollments.c12_g as enrollment'),
                'clusters.name as cluster_name',
                'districts.name as district_name',
                'villages.name as village_name',
                'habitations.name as habitation_name',
                'educational_blocks.name as educational_block_name',
                'panchayats.name as panchayat_name',
                'school_categories.name as category_name'
                ]);
    }

    public function propertiesFromUdise()
    {
    	return [
    		'code'                                         => 'schcd',
    		'name'                                         => 'schname',
    		'rural_urban'                                  => 'rururb',
    		'habitation_code'                              => 'habitcd',
    		'village_code'                                 => 'vilcd',
    		'district_code'                                => 'district_code',
    		'cluster_code'                                 => 'clucd',
    		'educational_block_code'                       => 'blkcd',
    		'pincode'                                      => 'pincd',
    		'panchayat_code'                               => 'pancd',
    		'crc_id'                                       => '', //'field'] 
    		'cd_block_name'                                => 'blkcd',
    		'educational_block_code'                       => 'edublkcd',
    		'constituency_code'                            => 'aconstcd',
    		'municipality_code'                            => 'municipalcd',
    		'city_code'                                      => 'city',
    		'head_phone_number_landline'                   => 'phone1',
    		'head_phone_number_mobile'                     => 'mobile1',
    		'respondent_phone_number_landline'             => 'phone1',
    		'respondent_phone_number_mobile'               => 'mobile1',
    		'website'                                      => 'website',
    		'email'                                        => 'email',
    		'school_category_id'                           => 'schcat',
    		'lowest_class'                                 => 'lowclass',
    		'type_of_school_elementary'                    => 'schtype',
    		'type_of_school_secondary'                     => 'schtypes',
    		'type_of_school_higher_secondary'              => 'schtypehs',
    		'management_id_elementary'                     => 'schmgt',
    		'management_id_secondary'                      => 'schmgts',
    		'management_id_higher_secondary'               => 'schmgths',
    		'distance_primary_to_upper_primary'            => 'distu',
    		'distance_upper_primary_to_secondary'          => 'dists',
    		'approachable_by_all_weather_road'             => 'approachbyroad',
    		'established_year'                             => 'estdyear',
    		'year_of_recognition_elementary'               => 'yearrecog',
    		'year_of_recognition_secondary'                => 'yearrecogs',
    		'year_of_recognition_higher_secondary'         => 'yearrecogh',
    		'year_of_uprade_primary_to_upper_primary'      => 'yearupgrd',
    		'year_of_uprade_upper_primary_to_secondary'    => 'yearupgrds',
    		'year_of_uprade_secondary_to_higher_secondary' => 'yearupgrdh',
    		'is_cswn'                                      => 'cwsnsch_yn',
    		'is_shift_school'                              => 'schshi_yn',
    		'is_primary_residential'                       => 'schres_yn',
    		'is_upper_primary_residential'                 => 'schresupr_yn',
    		'is_secondary_residential'                     => 'schressec_yn',
    		'is_higher_secondary_residential'              => 'schreshsec_yn',
    		'type_of_residential_id'                       => 'resitype',
    		// 'medium_of_instruction_1_id'                => 'field',
    		// 'affiliation_board_id'                         => 'field',
    		// 'latitude'                                     => 'field',
    		// 'longitude'                                    => 'field',

    		'pre_primary_available'                        => '', //'field',
    		'anganwadi_available'                          => 'anganwadi_yn',
    	];
    }

    public function getSchoolsByLocation($type, $code)
    {
        if($code == null){
            return $this->select('id', 'code', 'district_code', 'name','longitude', 'latitude')->get();
        }
        return $this->with($type)->where($type . '_code', '=', $code)->select('id', 'code','name','district_code', 'educational_block_code', 'village_code', 'longitude', 'latitude')->get();
        // return $schools;
    }

    public function getOverview($id)
    {
        $school = $this->find($id)->queryWithAllProperties(date('Y'));
    }

    public function getLatestEnrollment()
    {
        $year = $this->where('year','=', DB::Raw('MAX(year)'))->where('school_id','=',$this->id)->select('year')->first()->year;
    }

    public function getEnrollments($year)
    {
        return Enrollment::where('year','=',$year)->where('school_id', '=', $this->id)->first();
    }
}
