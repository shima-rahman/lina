<?php 

	function myExplode($sentence){
	
		$strlength = strlen($sentence);
		$words = array();
		$word = " " ;
		for($i =0 ; i<$length ; i++)
		{
			if(ord($sentence[$i])==13){
				continue;
			}
			echo ord($sentecne[$i]) , "<br>");
			
			if($sentence[$i]==" " || $sentence[$i]== "\n" || $sentecne[$i])
			{
				if($i == $strlength-1)
				{
					$word = $word.$sentence[$i];
				}
			}
		}
	}

	$mypointer = file_get_contents("sentence.txt");
	$words = array();
	$word = " " ;
		
	$length = strlen($mypointer);


	for($i=0; $i<$length; $i++)
	{
	   if($mypointer[$i] == " " || $i == $length-1 )
	   {
		  if($i == $length-1)
		  {
			  $word  .= $mypointer{$i};
		  }	
		   
			array_push($words,$word);
			$word = " ";
			
	   }
	   else
	   {
		 $word .= $mypointer{$i};
	   }
	}
	print_r($words);



?>