<?php
	include "C:/xampp/htdocs/training/php/OOP/myFunction/explode_functions.php";
	
	class explode
	{
		public $string="";
		
		function explode1()
		{
			return myExplode ($this->string);
		
		}
	}

	
	$string1 = new explode;
	$string1->string="MY NAME IS POLY I AM A CSTE GRADUATE .";
	print_r($string1->explode1());

	
?>