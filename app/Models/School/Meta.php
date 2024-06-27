<?php

namespace TIST\Models\School;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
	public function schools()
	{
		return $this->hasMany('TIST\Models\School');
	}
}
