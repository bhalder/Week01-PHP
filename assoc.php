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
	PROGRAM : Associative Array 
*/ 

$fees = array (
		"USC"=> "A lot<br>",
		"NYU"=> "A little more<br>",
		"CMU"=> "Ridiculous<br>"
		);
// As a foreach
foreach( $fees as $fee ) {
	print("$fee");
}

print "Fees of CMU is ".$fees["CMU"]."<br>";

?>
</body>
</html>
