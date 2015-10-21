<?php

	$mypointer = fopen("sentence.txt","r");
	fwrite($mypointer,"I am writing in the file1.\n");
	fwrite($mypointer,"I am writing in the file2.\n");
	fclose($mypointer);

	$mypointer = fopen("sentence.txt","w");
	fwrite($mypointer,"I am writing in the file3.\n");
	fwrite($mypointer,"I am writing in the file4.\n");
	fclose($mypointer);
	
	$mypointer = fopen("sentence.txt","a");
	fwrite($mypointer,"I am writing in the file3.\n");
	fwrite($mypointer,"I am writing in the file4.\n");
	fclose($mypointer);
	
	$mypointer = fopen("sentence.txt","r");
	echo fgets($mypointer);
	echo fgets($mypointer);
	fclose($mypointer);
	
	

?>