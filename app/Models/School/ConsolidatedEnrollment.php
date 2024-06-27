<?php

namespace TIST\Models\School;

use Illuminate\Database\Eloquent\Model;

class ConsolidatedEnrollment extends Model
{
	protected $fillable = ['statistic_id'];
	
	public function school()
	{
		return $this->belongsTo('TIST\Models\School');
	}

	public function history($schoolId)
	{
		return $this->where('school_id', '=', $schoolId)->orderBy('updated_at', 'DESC')->get();
	}
	
	public static function propertiesFromUdice()
	{
		return [
			'cpp_g',
			'cpp_b',
			'c1_b',
			'c1_g',
			'c2_b',
			'c2_g',
			'c3_b',
			'c3_g',
			'c4_b',
			'c4_g',
			'c5_b',
			'c5_g',
			'c6_b',
			'c6_g',
			'c7_b',
			'c7_g',
			'c8_b',
			'c8_g',
			'c9_b',
			'c9_g',
			'c10_b',
			'c10_g',
			'c11_b',
			'c11_g',
			'c12_b',
			'c12_g',
		];
	}
}
