<?php
	include "C:/xampp/htdocs/xampp/Training/php/myFunction/only_explode_function.php";
	class Frequency{
		public $word = "";
	
		function setExplode($sentence){
			$result = myExplode($sentence);
			$this->word = $result;
			return $this->word;
		}
	}
	
	$find_explode = new Frequency;
	$find_explode->setExplode("i am nirupam");
	
	print_r($find_explode->word);
?>