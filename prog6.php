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
	PROGRAM : Local Variables and Functions 
*/ 

$x = 10;

function print_x() {
   $x = 5;
   print "X local is $x<br>";

}

print_x();
print "X global is $x<br>";

?>
</body>
</html>
