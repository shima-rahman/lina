<?php
	/*$mypointer = fopen("sentence.txt","w");
	while(1)
	{
	echo fgetc($mypointer),"<br>";
	}*/
	
	
	//
	/*$mypointer = fopen("sentence.txt","r");
	while(feof($mypointer))
	{
	echo fgetc($mypointer),"<br>";
	}*/
	
	
	$mypointer = fopen("sentence.txt","w");
	while(!feof($mypointer))
	{
	echo fgetc($mypointer),"<br>";
	}
?>