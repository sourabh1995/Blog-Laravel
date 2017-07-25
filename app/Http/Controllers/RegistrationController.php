<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	$this->validate(request(),[
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed' ]);

        /*$user = New User;

        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->save();*/
    	$user = User::create(['name'=> request('name'),'email'=>request('email'),'password'=>bcrypt(request('password'))]);

    	auth()->login($user);

    	return redirect()->home();

    }
}
