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
	PROGRAM : Functions 2 
*/ 

// Define the function
function mult($x, $y) {
	return $x*$y;
}


// Multiply function called.
$ret = mult(10, 2);
print "Calling Function $ret<br>";
print "Calling Function <br>"+mult(10,4);

?>
</body>
</html>
