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
	PROGRAM : SWITCH CASE 
*/ 

$d = date("D");

switch( $d ) {

	case "Sun":
		print "Sunday <br>";
		break;
	case "Mon":
                print "Monday <br>";
                break;
	case "Tue":
                print "Tuesday <br>";
                break;
	case "Wed":
                print "Wednesday <br>";
                break;
	case "Thu":
                print "Thursday <br>";
                break;
	case "Fri":
                print "Friday <br>";
                break;
	case "Sat":
                print "Saturday <br>";
                break;


}

?>
</body>
</html>
