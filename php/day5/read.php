<?php

	$mypointer = fopen("sentence.txt","r");
	
	//to read one line
	$string =  fgets($mypointer);
	echo $string[0]." ".$string[1];
	
	echo fgets($mypointer);
	echo fgets($mypointer);
	echo fgets($mypointer);
	echo fgets($mypointer);
	//echo fread($mypointer,filesize("sentence.txt"));
	
	fwrite($mypointer,"I am writing in the file.");


?>