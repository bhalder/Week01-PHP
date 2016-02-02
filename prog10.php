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
	PROGRAM : Constants 
*/ 

// Define the constants using the define function
// Constants cannot start with a number or a special character
// Constants do not need a Dollar sign before them 


define("ONE", 1);
define("TWO", 2.34);
define("THREE", "HELLLLLOOOOO");
print ONE;

// Valid
define("ONE_", 1);
define("ONE1", 1);
define("ONE", 2);

print "\n".ONE;
print TWO;
print THREE;
print ONE_;
print ONE1;
print ONE1;

/* INVALID
define("_ONE", 1);
define("1ONE", 1);
*/

?>
</body>
</html>
