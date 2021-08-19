<?php 



class ByeBye {


	const LEAVINGMESSAGE = 'Thank you see you next Goodbye!';

	public function msg(){
		echo self::LEAVINGMESSAGE;
	}



}


$info = new ByeBye();

$info->msg();











 ?>