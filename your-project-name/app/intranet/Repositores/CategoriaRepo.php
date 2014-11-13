<?php

namespace intranet\Repositores;

use intranet\Entities\Categoria;

class CategoriaRepo {
	public function find($id) {
		return $category = Categoria::find($id);
		
	}
}