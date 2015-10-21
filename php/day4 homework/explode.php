<?php

$string = "what is your name";

$words = array();
$word = " ";

$length = strlen($string);


for($i=0; $i<$length; $i++)
{
   if($string[$i] == " " || $i == $length-1 )
   {
	  if($i == $length-1)
	  {
		  $word  .= $string{$i};
	  }	
       
        array_push($words,$word);
		$word = " ";
		
   }
   else
   {
	 $word .= $string{$i};
   }
}
print_r($words);


?>