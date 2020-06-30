<?php
namespace Engine;

class Controller
{
	protected $page;
	protected $data;

	public function view($page, $data = [])
	{

		$this->page = $page;

		$pageView = '../views/' .$this->page. '.php';

		if (file_exists($pageView)) {
			return require $pageView;
		} 

		die($this->page. ' Not Found');
	}

	public function redirect($location)
	{
		return header('location:'. url .$location);
	}
}
