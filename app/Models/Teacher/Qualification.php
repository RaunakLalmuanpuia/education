<?php

namespace TIST\Models\Teacher;

class Qualification extends Meta
{
    public function teachers()
	{
		return $this->hasMany('TIST\Models\Teacher');
	}
}
