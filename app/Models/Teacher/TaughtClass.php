<?php

namespace TIST\Models\Teacher;

use Illuminate\Database\Eloquent\Model;

class TaughtClass extends Model
{
	protected $table = 'classes_taught';
	
    public function teachers()
	{
		return $this->hasMany('TIST\Models\Teacher');
	}
}
