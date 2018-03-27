<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function getLogin(){
		$name = "Josip";
		$lastname = "Vrdoljak";
		$email = "vrdoljakjosip@outlook.com";
		
		$fullname = $name . " " . $lastname;
		
		$data = [];
		$data['fullname'] = $fullname;
		$data['email'] = $email;

		return view('Pages/login')->withData($data);
	}
	public function getRegister(){
		return view('Pages/register');
	}
}