<?php

namespace intranet\Repositores;

use intranet\Entities\Category;

class CategoryRepo extends BaseRepo{
	public function getModel()
	{
		return new Category;
	}
}