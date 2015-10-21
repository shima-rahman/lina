<?php
	$sentence = "i am poly i am poly i am poly";
	$words = Explode(" ", $sentence);
	print_r($words);
	echo "<br>";
	$wordcount = count($words);
	print_r($wordcount);
	echo "<br>";
	//associative array
	$frequency = array();
		for($i=0;$i<$wordcount;$i++)
		{
		//checking if my key exists or not

			if(array_key_exists($words[$i], $frequency))
			{
			$frequency[$words[$i]]++;
			
			}
			
			else
			{
			$frequency[$words[$i]] = 1;
			}
		}
		
		print_r($frequency);
?>