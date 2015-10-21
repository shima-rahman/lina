<?php
	//all keywords are case insensitive
    $x = array(1,"hello",4);
	//$x = aRRay(1,"hello",4);
	
	$count=str_word_count($x[1]);
	
	echo "value at index 1 is $x[1] and function value is $count";
	
	/*javascript
	var str=09809;
    console.log(str);*/	
	echo "value at index 0 is $x[0]","<br>";
	echo "value at index 1 is $x[1]","<br>";
	echo "value at index 2 is $x[2]";
	
	//constant
	$operand1=90;
	
	define("BASEURL","http://www.google.com");
	
	//$SAMPLE = "this is a variable";
	//SAMPLE = "random";
	//echo $SAMPLE;
	
	//file1
	echo "BASEURL/ http://www.google.com/user";
	
	//file2
	echo "connect http://www.google.com/friends";
	
	//file3
	echo "connect http://www.google.com/family";
?>
