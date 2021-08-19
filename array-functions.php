<?php 


//  Creates an array

$create = array();

//  Changes all keys in an array to lowercase or uppercase

$case = array(
	'iam'=>'I am ',
	'profession'=>'web developer',
);

print_r(array_change_key_case($case,CASE_UPPER ));

//  Splits an array into chunks of arrays

$chunk = array(
	'iam'=>'I am ',
	'profession'=>'web developer',
);

print_r(array_chunk($chunk, 1));

// Returns the values from a single column in the input array

$column = array(
	array(
		'id'=>'1',
		'first_name'=>'mashud',
		'last_name'=>'rana',
	),
	array(
		'id'=>'2',
		'first_name'=>'ab',
		'last_name'=>'sumon',
	),
	
);

$line = array_column($column, 'first_name');

print_r($line);


// Creates an array by using the elements from one "keys" array and one "values" array

$first = array('id'=>'1','first_name'=>'mashud','last_name'=>'rana');
$last = array('id'=>'2','first_name'=>'ab','last_name'=>'rana');

$line = array_combine($first,$last);

print_r($line);

// Counts all the values of an array

$first = array('id'=>'1','first_name'=>'mashud','last_name'=>'rana');
$last = array('id'=>'2','first_name'=>'ab','last_name'=>'rana');

$line = array_count_values($first);

print_r($line);


// Checks if the specified key exists in the array

$first = array('id'=>'1','first_name'=>'mashud','last_name'=>'rana');
$last = array('id'=>'2','first_name'=>'ab','last_name'=>'rana');

$line = array_key_exists('id', $first);

print_r($line);

// Returns all the keys of an array

$first = array('id'=>'1','first_name'=>'mashud','last_name'=>'rana');
$last = array('id'=>'2','first_name'=>'ab','last_name'=>'rana');

$line = array_keys($first);

print_r($line);

// Merges one or more arrays into one array

$first = array('id'=>'1','first_name'=>'mashud','last_name'=>'rana');
$last = array('id'=>'2','first_name'=>'ab','last_name'=>'rana');

$line = array_merge($first,$last);

print_r($line);

// Deletes the last element of an array

$first = array('id'=>'1','first_name'=>'mashud','last_name'=>'rana');

$line = array_pop($first);

print_r($line);

// Inserts one or more elements to the end of an array

$first = array('id'=>'1','first_name'=>'mashud','last_name'=>'rana');

$line = array_push($first, 'ami','tumi');

print_r($line);

// Searches an array for a given value and returns the key

$first = array('id'=>'1','first_name'=>'mashud','last_name'=>'rana');

$line = array_search('id',$first);

print_r($line);

// Returns selected parts of an array

$slice = array('i','am','web','developer');

$line = array_slice($slice, '1');

print_r($line);


// 	Returns the number of elements in an array

$count = array('i','am','web','developer');

$line = count($count);

print_r($line);










 ?>