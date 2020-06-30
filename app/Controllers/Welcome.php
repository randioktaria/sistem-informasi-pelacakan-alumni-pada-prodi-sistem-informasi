<?php
namespace app\Controllers;

use system\Controller; 

class Welcome extends Controller
{
	public function index()
	{
		$this->view('admin/index');
	}
}