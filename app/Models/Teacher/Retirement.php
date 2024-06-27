<?php

namespace TIST\Models\Teacher;

use Illuminate\Database\Eloquent\Model;

class Retirement extends Model
{
	protected $guarded = [];

	protected static function boot()
	{
		parent::boot();

		static::saving(function($retirement){
			$retirement->teacher->status = 'inactive';
			$retirement->teacher->save();
		});
	}

	public function teacher()
	{
		return $this->belongsTo('TIST\\Models\\Teacher');
	}

	public function type()
	{
		return $this->belongsTo('TIST\\Models\\Teacher\\RetirementType');
	}
}
