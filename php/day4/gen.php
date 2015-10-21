<?php
	//$aa = array("ken"=>"developer","ben"=>"manager");
	//$aa["gen"] = "tester";
	//echo $aa["gen"];
	//$string = "Hi my name is fahmida ";
	//$sentence = "I am resident from Comilla";
	//$words = Explode(" ","$string");
	//$words = Explode(" ","$sentence");
	//print_r ($words);
	//echo $aa["ken"];
	$sentence = "hi hi hi hi hi";
	$length = strlen($sentence);
		echo $length;
	$words = Explode(" ",$sentence);
	
	$frequency = array();
	
	
	//main code
	$wordcount = count($words);
	
	for($i=0;$i<$wordcount;$i++)
	{
		//checking if my key exist or not
	
		if(array_key_exists($words[$i],$frequency))
		
		{
			$frequency[$words[$i]]++;
		}
		else
		{
			$frequency[$words[$i]] = 1;
		}
	}
	print_r ($frequency);
	
	/*$aa["den"] = "tester";
	if(isset($aa["den"])){
	echo "den is present";
	}
	
	else
	{
	echo "den is not present in key aa";
	}
	*/
	
	
?>