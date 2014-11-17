<?php

use intranet\Entities\User;
use intranet\Managers\RegisterManager;
use intranet\Repositores\CandidateRepo;

class UserController extends BaseController {

    protected $candidateRepo;


    public function __construct(CandidateRepo $candidateRepo)
    {
        $this->candidateRepo = $candidateRepo;
    }


	public function signUp()
    {
		return  View::make('users/sign-up');
	}


    public function register()
    {
        $user = $this->candidateRepo->newCandidate();
        $manager = new RegisterManager($user, Input::all());

        if($manager->save())        {
            return Redirect::route('home');
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($manager->getErrors());
        }
    }
}