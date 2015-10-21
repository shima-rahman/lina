<?php
	$mypointer = fopen("sentence.txt","a");
	fwrite($mypointer,"I am writing in the file.\n");
	fwrite($mypointer,"I am writing in the file.");
	
	//colse file
	fclose($mypointer);


?>