<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
	public function welcome() {

		if (!(new User)->checkLoggedIn()) return abort(404);

		return view('welcome');
	}
}
