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
	PROGRAM : PHP Magic Constants 
*/ 


// The line number where it is being printed
print "<br>LINE :"; print __LINE__;

// The current filename
print "<br>FILE : "; print __FILE__;

// The function from which it is being executed
// OUT : (Not in any function)
print "<br>FUNCTION (Not in any function): "; print __FUNCTION__;

function func() {
	// This function would print the place wherever it has
	// been declared - In this case 28
	print "<br>LINE :"; print __LINE__;
	// Output : func()
	print "<br>FUNCTION : "; print __FUNCTION__;
}

print "<br>CLASS : "; print __CLASS__;
print "<br>METHOD : "; print __METHOD__;

func();
?>
</body>
</html>
