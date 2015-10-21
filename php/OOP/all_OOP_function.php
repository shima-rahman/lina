<?php
	include "C:/xampp/htdocs/training/php/OOP/myFunction/myStrlen_function.php";
	include "C:/xampp/htdocs/training/php/OOP/myFunction/myStringRev.php";
	include "C:/xampp/htdocs/training/php/OOP/myFunction/uppercase.php";
	include "C:/xampp/htdocs/training/php/OOP/myFunction/lowercase.php";
	class my_string
	{
		public $string="";
		
		function str_len()
		{
			return my_strlen($this->string);
		}
		
		/*function str_rev()
		{
			return my_rev_string($this->string);		
		}
		
		function upper()
		{
			return uppercase ($this->string);
		}
		
		function lower()
		{
			return lowercase ($this->string);
		}*/
	
	
	}
	$string1 = new my_string;
	$string1->string="my name is poly";
	echo $string1->str_len();

	//echo "The string reverse is : ", $string1->str_rev();
	//echo "The uppercase string is : ", $string1->upper();
	//echo "The lowercase string is : ", $string1->lower();

	


?>