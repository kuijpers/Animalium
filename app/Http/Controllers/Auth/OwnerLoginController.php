<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OwnerLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:owner');
	}


	public function showLoginForm()
	{
		return view('auth.owner-login');
	}
}
