<?php

namespace TIST\Models\Locations;

use Illuminate\Database\Eloquent\Model;
use DB;

class District extends Model
{
	public function getClusters()
	{
		return Cluster::where('code', 'LIKE', $this->code . '%')->get();
	}

	public function schools()
	{
		return $this->hasMany('TIST\\Models\\School', 'district_code', 'code');
	}

	public function getOverviewDataJSON($value='')
	{
		return json_encode($this->getOverviewData());
	}

	public function getOverviewData()
	{
		//school count, teacher count, students (boys girls) count, result (when available)
		$schools = \TIST\Models\School::with('district')->select(DB::Raw('COUNT(id) as count'), 'district_code', 'name')->groupBy('district_code')->get();
		// dd($schools);
		return $schools;

		// $enrollmentsWithSchools = \TIST\Models\School::with('consolidatedEnrollments')->get();
		
		// $q = DB::table($this->getTable())
		// 		->leftJoin('schools', 'schools.district_code', '=', $this->getTable(). '.code')
		// 		->leftJoin('statistics', function($join){
		// 			$join->on('statistics.school_id', '=', 'schools.id')
		// 				->where('statistics.year', '=', DB::Raw('MAX(CAST(year) AS UNSIGNED)'));
		// 		})
		// 		->leftJoin('consolidated_enrollments','consolidated_enrollments.statistic_id', '=', 'statistics.id')
		// 		->groupBy('schools.district_code')
		// 		->select()
		// 		->select('districts.name', DB::Raw('SUM(consolidated_enrollments.cpp_g + consolidated_enrollments.cpp_b) as cpp'))
		// 		->get();

		// dd($q);
	}
}
