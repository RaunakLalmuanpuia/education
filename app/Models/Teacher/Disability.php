<?php

namespace TIST\Models\Teacher;

use Illuminate\Database\Eloquent\Model;

class Disability extends Model
{
    public function teachers()
	{
		return $this->hasMany('TIST\Models\Teacher');
	}
}
