<?php
	include "C:/xampp/htdocs/training/php/OOP/myFunction/myStringRev.php";
	
	class mystr_rev
	{
		public $string="";
		
		function str_rev()
		{
			return my_rev_string($this->string);		
		}
	
	}
	
	$string1 = new mystr_rev;
	$string1->string="my name is poly";
	echo $string1->str_rev();



?>