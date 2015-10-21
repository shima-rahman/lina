<?php
	/*$a = array(1,2,3,4,5);
	$i = 0;
	foreach($a as $number)
	{
		echo "number ",$number," index is", $i++,"<br>";
	}
	*/
	$sentence = "i am poly i am poly i am poly";
	$words = Explode(" ", $sentence);
	print_r($words);
	echo "<br>";
	$wordcount = count($words);
	print_r($wordcount);
	echo "<br>";
	
	$frequency = array();
		foreach($words as $word) 

		{
		//checking if my key exists or not

			if(array_key_exists($word, $frequency))
			{
			$frequency[$word]++;
			
			}
			
			else
			{
			$frequency[$word] = 1;
			}
		}
		//use foreach instead of print_r
		foreach($frequency as $key=>$value)
		{
			echo "$key=>$value","<br>";
		}
	
	

?>


