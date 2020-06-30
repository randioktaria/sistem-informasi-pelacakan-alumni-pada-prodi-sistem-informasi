<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Controller;

class Secure extends Controller
{

	public function index()
	{
		# halama login admin
		$this->view('alumni/login');
	}

	public function login()
	{
		$this->alumni = new \app\Models\Alumni;

		$username = @$_POST['username'];
		$password = md5(@$_POST['password']);

		$login = $this->alumni->cek_username_password($username, $password); 

		if ($login) {
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['status'] = 'alumni';

			$this->redirect('dashboard');
		} else {
			$this->redirect('secure');
		}
	}

	public function logout()
	{
		# logout Alumni
		$logout = Auth::destroy();
		
		if ($logout) {
			$this->redirect('home');
		}
	}
}
