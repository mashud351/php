<?php 


//  Validate EMAIL 
$email = 'mashudranapro@gmail.com';

if(filter_var($email, FILTER_VALIDATE_EMAIL )){
	echo "Yes, this is a email address";
}else{
	echo 'No, this is not email address';
}

// Validate URL 
$url = 'http://facebook.com/mashudranapro';

if(filter_var($url, FILTER_VALIDATE_URL )){
	echo "Yes, this is a url address";
}else{
	echo 'No, this is not url address';
}


// Validate STRING 
$string = 'i am web developer';

if(filter_var($string, FILTER_SANITIZE_STRING )){
	echo "Yes, this is a string";
}else{
	echo 'No, this is not string';
}


// Validate BOOLEAN 
$boolean = true;

if(filter_var($boolean, FILTER_VALIDATE_BOOLEAN )){
	echo "Yes, this is a boolean";
}else{
	echo 'No, this is not boolean';
}

// Validate INT 
$int = 351;

if(filter_var($int, FILTER_VALIDATE_INT )){
	echo "Yes, this is a integer";
}else{
	echo 'No, this is not integer';
}

// Validate IP 
$ip = '192.168.1.112';

if(filter_var($ip, FILTER_VALIDATE_IP )){
	echo "Yes, this is a IP address";
}else{
	echo 'No, this is not IP address';
}










 ?>