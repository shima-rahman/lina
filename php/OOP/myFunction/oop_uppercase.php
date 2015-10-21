<?php
	include "C:/xampp/htdocs/training/php/OOP/myFunction/uppercase.php";
	
	class upper_case
	{
		public $string="";
		
		function upper()
		{
			return uppercase ($this->string);
		}
	}
	
	$string1 = new upper_case;
	$string1->string="my name is poly";
	echo $string1->upper();


?>