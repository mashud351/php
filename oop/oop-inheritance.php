<?php 


class Mashud {


  	public function get_name(){
  		echo "Mashud Rana";
  	}
  	public function get_title(){
  		echo " Web Developer";
  	}

}

class Description extends Mashud{
	
	
	public function full_desc(){
		$this->get_name();
		$this->get_title();
	}



}


$info = new Description();

echo $info->full_desc();






 ?>