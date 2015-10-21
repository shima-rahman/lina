<?php 
	function myFreq($words)
	{
		    //$words = array();
		    //$word = " ";
			$frequency =array();
			 
			foreach($words as $word)
			 {
				  
				 if(array_key_exists($word,$frequency))
				 {
					 $frequency[$word]++; 
				 }
				 else
				 {
					 $frequency[$word]=1;
				 }
		 
 }
  
     //print_r($frequency);
	 return $frequency;
 }
 
	function myExplode($sentence)
	{
			
		 $length = strlen($sentence);
		  
		  $words = array();
		  $word = " ";
		  for($i=0; $i<$length; $i++)
		  {
			if(ord($sentence[$i]) == 13)
			{
				continue;
			}
			echo ord($sentence[$i]),"<br>";
		  
			if($sentence[$i] == " " || $sentence[$i] == "\n" || $i == $length-1 )
			{		

			if($i == $length-1)
			{
			  $word  .= $sentence{$i};
		   }	
		   
			array_push($words,$word);
			$word = " ";
		}
	   else
	   {
		 $word .= $sentence{$i};
	   }  
	} 
	 print_r($words);
	 echo "<br>";

	
		return $words;
	}

?>