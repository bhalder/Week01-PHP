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
	PROGRAM : Functions - Using static within the function 
*/ 

function counter() {

	STATIC $c = 0;
	$c++;
	print "counter is $c <br>";

}

counter();
counter();
counter();
counter();
counter();

?>
</body>
</html>
