<?php
namespace Engine;

use Engine\Connection;

class Model 
{
	public $db;

	public function __construct()
	{
		$this->db = new Connection;
	}

}