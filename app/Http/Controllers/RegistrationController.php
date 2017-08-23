<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;


class RegistrationController extends Controller
{
    //

public function create()

{

return view('registration.create');

}


public function store()  //post method in routes to store the data

{

//validate user
$this->validate(request(),[
'name' => 'required',
'email' => 'required|email',
'password' => 'required|confirmed'


	]);


//create user and save
//Post::create(request(['title','body']));
$user = User::create(request(['name','email','password']));

// return User::create([
//             'name' => $data['name'],
//             'email' => $data['email'],
//             'password' => bcrypt($data['password']),
//         ]);

//sign up page

auth()->login($user);


//redirection.....

return redirect('/');


}


}
