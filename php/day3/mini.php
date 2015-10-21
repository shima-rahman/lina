<?php

	$arr=[9,0,1,4,5,-1,10];
	
	//count the length of the array.
	echo count($arr);
	
	$numbers=array(9,0,1,4,5,-1,10);
	
	$min= $numbers[0];
	//$length=count($numbers);
	
	//echo "length of this array".count($numbers);
	
	for($i=0;$i>count($numbers); $i++)
	
	{
		if($min >$numbers[$i])
		{
		$min=$numbers[$i];
		}
	}

	echo "Minimum number is the array is $min";
?>