<?php
  
  function minimumArray($inputArray)
		{
			$min = $inputArray[0];
			$length=count($inputArray);
		 
		       for($i=0; $i<$length; $i++)
		       {
				   if($min>$inputArray[$i])
				   {
					   $min = $inputArray[$i];
					   
				   }
		       }
		   
		   return $min;
		}



?>