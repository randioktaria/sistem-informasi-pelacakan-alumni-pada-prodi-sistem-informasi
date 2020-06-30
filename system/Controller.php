<?php
namespace System;

class Controller
{
	protected $page;
	protected $data;
	protected $session;

	public function view($page, $data = null)
	{
		$this->page     = $page;
		$this->data     = $data;

		$pageView = '../views/' .$this->page. '.php';

		if (file_exists($pageView)) {
			return require_once $pageView;
		} 

		die($this->page. ' Not Found');
	}

	public function logged($session)
	{
		$this->session = $session;
		return ! empty($this->session);
	}

	public function sess_destroy()
	{
		session_unset();
		session_destroy();
	}

	public function message($ket, $pesan)
	{
		$_SESSION['message'] = [
			'pesan' => $pesan, 
			'ket' 	=> $ket
		];
	}

	public function messageshow()
	{
		if (isset($_SESSION['message'])) {
			//menampilkan Pesan
			echo $_SESSION['message']['pesan'];

			unset($_SESSION['message']);
		}
	}
}
