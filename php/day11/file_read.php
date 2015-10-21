<?php
	function read($string)
	{
		$mypointer = fopen("read.txt","r");
		return fgets($mypointer);
		
	}
	echo read('read.txt');

?>