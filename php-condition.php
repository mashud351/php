<?php 


// php conditional statement 

//  If Condition
$developer = 'Web';

if($developer == 'Web'){
	echo "I am Web Developer";
}


// if else condition

$salary = 50000;

if($salary == 40000){
	echo "My salary is 50000";
}else{
	echo "My salary is under 50000";
}

//  if elseif condition

if($salary > 30000){
	echo "My salary is smaller than 30000";
}elseif($salary >= 5000){
	echo "My salary is greather than 50000 ";
}else{
	echo "My salary is under 20000";
}



//  switch statement 

switch ($salary) {
	case 30000 :
		echo "My salary is 30000";
		break;
	case 40000:
		echo "My salary is 40000";
		break;
	default:
		echo "My salary is 50000";
		break;
}






 ?>