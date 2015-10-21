<?php

	//$arr=[9,0,1,4,5,-1,10];
	
	//count the length of the array.
	//echo count($arr);
	
	$numbers=array(9,0,1,4,5,-1,10);
	
	$max = $numbers[0];
	//$length=count($numbers);
	
	//echo "length of this array".count($numbers);
	//$i=0;
	//while($i<count($numbers))
	//{
	
	//echo $i;
	//$i++
	
	//}
	
	for($i=0;$i<count ($numbers); $i++)
	
	{
	if($max<$numbers[$i])
	{
	$max=$numbers[$i];
	}
	}

	echo "Maximum number is the array is $max";
?>