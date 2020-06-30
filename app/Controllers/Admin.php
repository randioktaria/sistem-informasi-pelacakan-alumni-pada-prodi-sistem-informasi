<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Controller;

class Admin extends Controller
{

	public function index() 
	{
		# halama login admin
		$this->view('admin/login');	
	}

	public function login()
	{
		# membuat objek dari model admin
		$admin = new \app\models\Admin;

		$username = @$_POST['username'];
		$password = md5(@$_POST['password']);
		$status   = 'admin';

		$login = $admin->login($username, $password);

		if ($login) {
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['status']   = $status;
			
			$this->redirect('dashboard');
		} else {
			$this->redirect('admin');
		}
	}

	public function logout()
	{
		# logout admin
		$logout = Auth::destroy();
		
		if ($logout) {
			$this->redirect('admin');
		}
	}
}
