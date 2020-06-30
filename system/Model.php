<?php
namespace System;

use system\Connection;

class Model 
{
	public $db;

	public function __construct()
	{
		$this->db = new Connection;
	}
}