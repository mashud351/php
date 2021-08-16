<?php 


echo $_GLOBALS;



$store = 'this is text';

function global_variable(){

	global $store;
	echo $store;

}

echo global_variable();



function another_function(){

	global $unique;

	$unique = 'this is variable';

	
}

echo another_function();

echo $unique;

 ?>