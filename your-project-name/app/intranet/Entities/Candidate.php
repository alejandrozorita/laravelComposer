<?php

namespace intranet\Entities;

class Candidate extends \Eloquent {
	protected $fillable = [];
		
	protected $perPage = 2;
	
	public function user() 
	{
		return $this->hasOne('intranet\Entities\User', 'id','id');
	}
	
	public function category() 
	{
		return $this->belongsTo('intranet\Entities\Category');
	}
	
	public function getJobTypeTitleAttribute()
	{
		return \Lang::get('utils.job_types.' . $this->job_type);
	}
}