<?php 


class Man{

	// Define properity
	public $name;
	public $color;

	// Construct Method 
	public function __construct($name){
		$this->name = $name;
	}
	public function get_name() {
    	return $this->name;
  	}



}



$info = new Man('mashud rana');


echo $info->get_name();











 ?>