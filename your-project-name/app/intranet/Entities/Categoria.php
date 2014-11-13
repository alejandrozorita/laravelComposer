<?php
namespace intranet\Entities;

class Categoria extends \Eloquent {
	protected $fillable = [];
	
	public function candidatos(){
		return $this->hasMany('intranet\Entities\Candidatos');
	}
}