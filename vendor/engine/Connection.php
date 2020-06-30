<?php
namespace Engine;

class Connection extends \PDO
{
	protected $dsn;
	protected $host;
	protected $username;
	protected $password;
	protected $dbname;

	public function __construct()
	{
		$database = require __DIR__.'/../../config/database.php';
		
		$this->host     = $database['DB_HOST'];
		$this->username = $database['DB_USERNAME'];
		$this->password = $database['DB_PASSWORD'];
		$this->dbname   = $database['DB_NAME'];
		
		$this->dsn      = 'mysql:host='. $this->host .'; dbname='. $this->dbname;

		parent::__construct($this->dsn, $this->username, $this->password);
	}
}
