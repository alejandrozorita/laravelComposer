<?php
/**
 * User: AlejandroZorita
 * Date: 17/11/14
 * Time: 13:37
 */

namespace intranet\Managers;

class RegisterManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'full_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
        return $rules;
    }



} 