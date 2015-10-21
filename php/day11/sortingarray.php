<?php

  $numbers = array(5,2,8,1,7,6);
  $result = sorting_array($numbers);
  print_r ($result);
  function sorting_array($numbers)
  {
	  $numbers = array(5,2,8,1,7,6);
	  $length = count($numbers);
	  
	  for($i=0; $i<$length; $i++)
	   {
			for($j=$i; $j<$length; $j++)
			{
			  if($numbers[$i]>$numbers[$j])
			  {
			  $temp = $numbers[$i];
			  $numbers[$i] = $numbers[$j];
			  $numbers[$j] = $temp;
			  }		
			}
		 
	   }
		return($numbers);
	}
	
?>