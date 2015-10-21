<?php
	class Mystring
	{
	
		public $value = "initial value";
		function mystrlen()
		{
			return strlen($this->value);
		}
	}
	
	$str1=new Mystring;
	$str1->value = "string value";
	echo $str1->mystrlen();
	
?>