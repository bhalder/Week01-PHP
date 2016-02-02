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
	PROGRAM : Operators - Logical 
*/ 

$a = 0;
$b = 1;
$g = 1;
$c = 10;
$d = "Hi";
$f = "hi";
$e = "Hi";

print "<br><br>Integer matches<br>";
if( $a > $b ) {
	print "A is greater than B <br>";
} else {
	print "B is greater than A <br>";
}

if( $b == $g ) {
	print "B and G are Equal <br>";
}

if( $g <= $c ) {
	print "G is smaller than C <br>";
}

print "<br><br>String matches<br>";
if( $d == $e ) {
	print "D and E are equal <br>";
}

if( $f < $e ) {
	print "F is smaller than E <br>";
} else {
	print "E is smaller than F<br>";
}
?>
</body>
</html>
