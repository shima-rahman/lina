<?php

	$mypointer = fopen("sentence.txt","w");
	fwrite($mypointer,"I am writing in the file1.\n");
	fwrite($mypointer,"I am writing in the file2.\n");
	echo fgets($mypointer);
	fclose($mypointer);
	
	fwrite($mypointer,"I am writing in the file3.\n");
	fwrite($mypointer,"I am writing in the file4.");
	fclose($mypointer);

?>