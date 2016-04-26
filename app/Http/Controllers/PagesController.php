<?php

namespace cs\Http\Controllers;

use Illuminate\Http\Request;

use cs\Http\Requests;

class PagesController extends Controller
{
	public function getHome(){
		return view('pages.home');
	}
}
