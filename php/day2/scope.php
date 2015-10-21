<?php
    global $x;
	//$x=123;
	//$y=10;
	
	function scope(){
	
		//access the variable x inside the function, declared global
		global $x  ; 
		//local variable
		$x=90;
		
		echo "value of x inside is", $x,"<br>";
	
	}
	
	function sample(){
		static $x = 0;
		$x = 0;
		$x = $x + 1;
		echo "value of x inside sample is",$x,"<br>";
	
	}
	scope();
	sample();
	sample();
	sample();
	echo "value of x outside is", $x;
?>