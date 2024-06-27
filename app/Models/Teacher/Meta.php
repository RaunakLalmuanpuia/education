<?php

namespace TIST\Models\Teacher;

use Illuminate\Database\Eloquent\Model;

abstract class Meta extends Model
{
	public function teachers()
	{
		return $this->hasMany('TIST\Models\Teacher');
	}
}
