<?php
 
  $string = "Fahmida";
  $string1 =" ";
  
  $length = strlen($string);
  $i = $length;
  
  while($i>0)
  {
	  $i--;
	  $string1 .= $string{$i};
  }
  echo $string1;
  
 
?>