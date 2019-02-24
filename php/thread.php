<?php

class mthread extends Thread {
	private $name = '';
	private $res = null;

	public function __construct($name, $func){
		$this->name = $name;
		$this->func = $func;
	}
	public function run(){
		if($this->func)
		{
			$this->func();
		}
	}
}


?>
