<?php
class Core{
	private $params = array();
	private $config;
	private function __construct() {
	}
	public static function getInstance(){
		static $instance = null;
		if($instance === null){
			$instance = new Core();
		}
		return $instance;
	}
	public function set($key, $value){
		$this->params[$key] = $value;
	}
	public function get($key){
		return $this->params[$key];
	}
	public function getParams(){
		return $this->params;
	}
	public function setError($key, $value){
		$error = Error::getInstance();
		$error->set($key, $value);
	}
	public function setConfig($config){
		$this->config = new Config($config);
	}
	/**
	 * @return Config
	 */
	public function getConfig(){
		return $this->config;
	}

}