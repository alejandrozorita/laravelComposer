<?php

use intranet\Repositores\CategoriaRepo;

class CandidatoController extends  BaseController {
	
	protected $categoriaRepo;
	
	public function __construct(CategoriaRepo $categoriaRepo) {
		$this->categoriaRepo = $categoriaRepo;
	}
	public function categoria($slug, $id) {
		$categoria = $this->categoriaRepo->find($id);
	//	dd($categoria);
		return  View::make('candidato/categoria', compact('categoria'));
	}
}