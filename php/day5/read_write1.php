<?php

	$mypointer = fopen("sentence.txt","r");
	$sentence = fread($mypointer);
	
	
	
	$mypointer = fopen("sentence.txt","w");
	fwrite($mypointer,"I am a FTFL trainee.\n");
	fwrite($mypointer,"My track is here PHP.\n");
	fclose($mypointer);
	

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

	$sentence = " ";
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
	
	