<?php
 
 $str1 = "bat";
 $str2 = "batter";
 
 
 $result = dictinary($str1,$str2);
 echo $result;
 
	function dictionary($str1,$str2)
	{ 
		 $len1 = strlen($str1);
		 $len2 = strlen($str2);
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
					 if(($str1[$i])>($str2[$i]))
					 {
						 return $str2;
					 }
					 else if(($str1[$i])<($str2[$i]))
					 {
						return $str1;
					 }
					 
				 }
				 
						 if($len1>$len2)
						 {
							 return $str2;
						 }
						 return $str1;	
	 
}

?>