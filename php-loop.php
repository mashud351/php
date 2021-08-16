<?php 



//  php loop 

// while loop
$number = 1;

while ($number <= 10) {
	echo "this is number is 10 <br>";
	$number++;
}

// for loop 

for ($number=0; $number < 10; $number++) { 
	echo "this is number of 10 <br>";
}



// foreach loop 


$associative_array = array('first','second','third','fourth');

foreach ($associative_array as $value) {
	echo $value;
}







 ?>