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
	PROGRAM : Multiline String variable 
*/ 

$channel =<<<_XML_
<channel>
<title> Barun Halder </title>
</channel>
_XML_;

print $channel;
?>
</body>
</html>
