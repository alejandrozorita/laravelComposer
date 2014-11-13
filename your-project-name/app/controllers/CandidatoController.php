<?php

use intranet\Repositores\CategoriaRepo;

class CandidatoController extends  BaseController {
	
	protected $categoriaRepo;
	
	public function __construct(CategoriaRepo $categoriaRepo) {
		$this->categoriaRepo = $categoriaRepo;
	}
	public function category($slug, $id) {
		$categoria = $this->categoriaRepo->find($id);
		//dd($categoria);
		return  View;
	}
}