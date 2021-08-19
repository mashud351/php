<?php 



class Man{

	public $name;
	public $email;
	public $address;

	public function name($name){
		return $this->name = $name;
	}
	private function email($email){
		return $this->email = $email;
	}
	protected function address($address){
		return $this->address = $address;
	}
	
}

$info = new Man();

echo $info->name('mashud rana'); // ok
echo $info->email('mashudranapro@gmail.com'); // error
echo $info->address('dhaka'); // error










 ?>