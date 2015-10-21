<?php
	include "C:/xampp/htdocs/training/php/OOP/myFunction/lowercase.php";
	
	class lower_case
	{
		public $string="";
		
		function lower()
		{
			return lowercase ($this->string);
		}
	}
	
	$string1 = new lower_case;
	$string1->string="MY NAME IS POLY";
	echo $string1->lower();

?>