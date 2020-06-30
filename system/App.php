<?php
namespace system;

class App
{	
	protected $controller = default_controller; 
	protected $method     = default_method;
	protected $params     = [];

	public function __construct() 
	{
		$url = $this->URL();
		
		# controllers 
		if ( file_exists('../app/controllers/'. $url[0] . 'Controller.php')) {
			$this->controller = $url[0];
			unset($url[0]);
		}
		
		$namespace = 'app\controllers\\';
		$ctrl      = $namespace .$this->controller;
		$this->controller = new $ctrl;

		# method
		if (isset($url[1])) { 
			if( method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		# parameter
		if( ! empty($url)) {
			$this->params = array_values($url);
		}

		# jalankan controller, method, params
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	function URL()
	{
		if(isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL );
			$url = explode('/', $url);
			return $url;
		}
	}
}