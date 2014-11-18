<?php

namespace intranet\Repositores;

use intranet\Entities\Candidate;
use intranet\Entities\Category;
use intranet\Entities\User;

class CandidateRepo extends BaseRepo{
	public function getModel() 
	{
		return new Candidate;
	}
	
	public function findLatest($take = 9)
	{
		return Category::with([
				'candidates' => function ($q) use ($take) {
					$q->take($take);
					$q->orderBy('created_at', 'DESC');
				},
				
			'candidates.user'
		])->get();
	}

    public function newCandidate()
    {
        $user = new User();
        $user->user_type = 'candidate';
        return $user;
    }

}