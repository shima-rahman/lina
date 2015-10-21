<?php
	function calculator($number1,$number2,$operator)
        {		
		
			     
				 if($operator == "+")
				 {
					 $result = $number1+$number2;
					 
				 }
				 
				 
				 elseif($operator == "-")
				 {
					 $result = $number1-$number2;
					
				 
				 }
				 elseif($operator == "*")
				 {
					 $result = $number1*$number2;
					 
				 }
				 
				 
				 elseif($operator == "/")
				 {
					 $resu1t = $number1/$number2;
					 
				 }
				 
				 
				 elseif($operator == "%")
				 {
					 $result = $number1%$number2;
					 
				 }
			return $result;	 
			   
			   
		 }
		 

?>