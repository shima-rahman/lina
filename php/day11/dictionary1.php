<?php 

	$word1="bat";
	$word2="cat";
	function which_is_first($word1,$word2)
	{ 
		 $len1 = strlen($word1);
		 $len2 = strlen($word2);
		 $minLen = 0;
			 
			 if($len1>$len2)
			 {
				 $minLen = $len2;
			 }
			 else
			 {
				 $minLen = $len1;
			 }
			 
				 for($i=0; $i<$minLen; $i++)
				 {
					 if(($word1[$i])>($word2[$i]))
					 {
						 return $word2;
					 }
					 else if(($word1[$i])<($word2[$i]))
					 {
						return $word1;
					 }
					 
				 }
				 
						 if($len1>$len2)
						 {
							 return $word2;
						 }
						 return $word1;	
	 
}
echo which_is_first("bat","cat");;

  $words = array("bat","cat","dog","egg","elephant","fish","golf","horse","ink");
  $length=count($words);
  echo $length;
  
  for($i=0;$i<$length;$i++)
  {
	for($j=$i;$j<$length;$j++)
	
	{
		$min = which_is_first($words[$i],$words[$j]);
		//echo $min , "$words[$i],$words[$j]",$i,$j,"<br>";
	
		if(1==$min)
		{
			$temp = $words[$i];
			$words[$i] = $words[$j];
			$words[$j] = $temp;
		}
	}
	
  }
  echo "<pre> 
  ";
   print_r($words);
   echo "</pre>";
 
  

?>