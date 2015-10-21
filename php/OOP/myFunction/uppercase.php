<?php


 
   
  function uppercase($string)
  {
	    $length=strlen($string);
		
		$upper="";

		for($i=0;$i<$length;$i++)
		{
			$strOrd= ord($string[$i]);
			
			$strOrdA= ord('A');
			$strOrdZ= ord('Z');
			
			
			if($strOrd >= $strOrdA && $strOrd <= $strOrdZ)
			{
			
				$newstr =$string[$i];
			}
			else
			{
			  $newstr= chr(($strOrd-ord('a'))+ord('A'));
			}
			 
			$upper .= $newstr;
		}	
			
	return $upper;	
  }
  
  
  
?>
