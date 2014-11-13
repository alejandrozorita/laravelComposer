<?php
namespace intranet\Entities;

class Candidatos extends \Eloquent {
	protected $fillable = [];
	
	public function users(){
		return $this->hasOne('intranet\Entities\User', 'id','id');
	}
	
}