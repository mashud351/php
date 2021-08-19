<?php 


// Define Class 
class Person {
	
	//  Define Properity
	public $name = 'mashud rana';
	public $height = 5.4;

	// Method 
	public function man_name(){

		return $this->name;

	}
	public function man_height(){

		return $this->height;
	}


}


$info = new Person();

echo $info->man_name();
echo $info->man_height();










 ?>