<?php
	include "C:/xampp/htdocs/training/php/OOP/myFunction/myStrlen_function.php";
	
	class my_stringlen
	{
		public $string="";
		
		function str_len()
		{
			return my_strlen($this->string);
		
		}
	
	
	}
	
	$string1 = new my_stringlen;
	$string1->string="my name is poly";
	echo $string1->str_len();


?>