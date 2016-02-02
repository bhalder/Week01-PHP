<html>
<head>
<title> Barun's PHP tutorial </title>
</head>
<body>
<?php
/* 
	AUTHOR : Barun Halder
	SUBJECT : PHP
	DATE : January, 2016
	PROGRAM : Functions - Using Globals within the function 
*/ 

$global_x = 10;

// Function Mult uses global variable x
function mult($y) {
	// Declare the global variable that you want to use
	GLOBAL $global_x;
	// Use the global
	return $global_x * $y;
}

$ret = mult(2);
print "Calling Function $ret<br>";
print "Calling Function <br>"+mult(4);

?>
</body>
</html>
