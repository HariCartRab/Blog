<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;


class SessionsController extends Controller
{
    //


public function create()
{

return view('session.create');
	
}


public function destroy() //to logout the user...destroying the session...
{

auth()->logout();

return redirect('/');

}



}
