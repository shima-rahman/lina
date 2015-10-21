<?php
  
  function maximumArray($inputArray)
		{
		$max = $inputArray[0];
			$length=count($inputArray);
		 
		       for($i=0; $i<$length; $i++)
		       {
				   if($max<$inputArray[$i])
				   {
					   $max = $inputArray[$i];
				   }
		       }
		   
		   return $max;
		}
 
  

?>