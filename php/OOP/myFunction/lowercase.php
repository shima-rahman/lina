<?php


  
  function lowercase($string)
  {
	    $length=strlen($string);
		
		$lower="";

		for($i=0;$i<$length;$i++)
		{
			$strOrd = ord($string[$i]);
			
			$strOrdA = ord('A');
			$strOrdZ = ord('Z');
			
			
			if($strOrd >= $strOrdA && $strOrd <= $strOrdZ)
			{
			    $newstr= chr(($strOrd-ord('A'))+ord('a'));
				
			}
			else
			{
			  $newstr =$string[$i];
			}
			 
			$lower .= $newstr;
		}	
			
	return $lower;	
  }

?>

