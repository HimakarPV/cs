<?php

namespace cs\Http\Controllers;

use Illuminate\Http\Request;

use cs\Http\Requests;

class UserController extends Controller
{
	public function getHome(){
		return view('panels.user.home');
	}
}
