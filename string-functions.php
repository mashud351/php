<?php 


//  Add Blackslashes front of the character

$backslashes = 'this is backslashes front of the text';

echo addcslashes($backslashes, 'f');

// 	Converts a string of ASCII characters to hexadecimal values

$bin2hex = 'this is ASCII characters <br>';

echo bin2hex($bin2hex);

// 	Removes whitespace or other characters from the right end of a string

$chop = 'this is ASCII characters <br>';

echo chop($chop);

// 	Returns information about characters used in a string

$count_chars = 'this is ASCII characters <br>';

echo count_chars($count_chars);

print_r(count_chars($count_chars));

// 	One-way string hashing

$crypt = 'welcome to my website';

echo crypt($crypt,'we');


// 	Breaks a string into an array

$explode = 'Breaks a string into an array';

$Breaks = explode(' ', $explode);

echo print_r($Breaks);


// 	Breaks a string into an array

$htmlentities = 'welcome to my <b>website</b> ';


echo htmlentities($htmlentities);


// 	Returns a string from the elements of an array

$implode = array('ami','tumi','she','tini');

$check = implode(' ', $implode);

print_r($check);


// 	Returns a string from the elements of an array

$join = array('ami','tumi','she','tini');

$check = join(' ', $join);

print_r($check);


// 	Calculates the MD5 hash of a string

$md5 = 'this is a md5';

 $md = md5($md5);

print_r($md);


// 	Outputs a formatted string

$profession = 'web developer';


printf('I am %s',$profession);


// 	Repeats a string a specified number of times

$profession = 'web developer';

echo str_repeat('I am web developer',5);


// 	Replaces some characters in a string (case-sensitive)

$search = 'I am self taught';
$replace = 'I am web developer';

echo str_replace($search, $replace,'i am full stack web developer');


// 	Count the number of words in a string

$word_count = 'I am web developer';

echo str_word_count($word_count);

// 	Returns the length of a string 

$length = 'I am web developer';

echo strlen($length);

// 	Converts a string to lowercase letters

$lowercase = 'I am web developer';

echo strtolower($lowercase);

// 	Converts a string to uppercase letters

$uppercase = 'I am web developer';

echo strtoupper($uppercase);

// 	Returns a part of a string

$part = 'I am web developer';

echo substr($part, '10');

// 	Removes whitespace or other characters from both sides of a string

$trim = 'I am web developer';

echo trim($trim);

//Wraps a string to a given number of characters

$wordwrap = 'lorem ipsum dolar sit amet ami tumi she tini tahara';

echo wordwrap($wordwrap,20,'<br>');













 ?>