<?php

namespace TIST\Models\Teacher;

use Illuminate\Database\Eloquent\Model;
use DB;

class ServiceInformation extends Model
{

    protected $guarded = [];
    
    public function queryWithAllProperties()
    {
        return DB::table($this->getTable())
            ->leftJoin('pension_types', 'service_informations.pension_type_id','=', 'pension_types.id')
            ->leftJoin('appointing_authorities', 'service_informations.appointing_authority_id','=', 'appointing_authorities.id')
            ->leftJoin('gpf_prefixes', 'service_informations.gpf_prefix_id','=', 'gpf_prefixes.id')
            ->select([
                'service_informations.id',
                'service_informations.date_of_appointment',
                'service_informations.date_of_joining',
                'service_informations.date_of_confirmation',
                'service_informations.gpf_prefix_id',
                'service_informations.gpf_suffix',
                'service_informations.new_pension_scheme_number',
                'service_informations.grade',
                'service_informations.rank_in_recruitment',
                'pension_types.name as pension_type',
                'pension_types.id as pension_type_id',
                'appointing_authorities.name as appointing_authority',
                'appointing_authorities.id as appointing_authority_id',
                'gpf_prefixes.name as gpf_prefix',
                ]);
    }
    public function createNew($props, $teacher)
    {
    	$this->teacher_id = $teacher->id;
    	$this->date_of_appointment = $props['date_of_appointment'];
    	$this->date_of_joining = $props['date_of_joining'];
    	$this->date_of_confirmation = $props['date_of_confirmation'];
        $this->gpf_prefix_id = $props['gpf_prefix'];
    	$this->gpf_suffix = $props['gpf_suffix'];
    	$this->new_pension_scheme_number = isset($props['new_pension_scheme_number']) ? $props['new_pension_scheme_number'] : null;
    	$this->pension_type_id = $props['pension_type_id'];
        $this->grade = $props['grade'];
        $this->rank_in_recruitment = $props['rank_in_recruitment'];
    	$this->appointing_authority_id = $props['appointing_authority_id'];

    	$this->save();

    	return $this;
    }

    public function appointing_authority()
    {
        return $this->belongsTo('TIST\\Models\\Teacher\\AppointingAuthority');
    }

    public function teacher()
    {
        return $this->belongsTo('TIST\\Models\\Teacher');
    }
}
