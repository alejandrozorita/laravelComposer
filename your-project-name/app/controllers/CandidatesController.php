<?php

use intranet\Repositores\CategoryRepo;
use intranet\Repositores\CandidateRepo;

class CandidatesController extends BaseController{
	
	protected $categoryRepo;
	protected $candidateRepo;
	
	public function __construct(CategoryRepo $categoryRepo, 
								CandidateRepo $candidateRepo){
		$this->categoryRepo = $categoryRepo;
		$this->candidateRepo = $candidateRepo;
	}
	
	
	public function category($slug, $id) 
	{
		
		$category = $this->categoryRepo->find($id);
		return View::make('candidates/category', compact('category'));
		//dd($category);
		
	}
	
	
	public function show($slug, $id) 
	{
		
		$candidate = $this->candidateRepo->find($id);
		return View::make('candidates/candidate', compact('candidate'));
		
		
	}
}