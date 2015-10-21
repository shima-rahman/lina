<?php
 
 include 'function.php';
 
 $myPointer = fopen("sentence1.txt","r");
  
  $sentence = fread($myPointer,filesize("sentence1.txt"));
 
 $words = myExplode($sentence);
// print_r($words);
 $frequency = myFreq($words);
 
 $myPointer1 = fopen("sentence2.txt","w");
	 
 foreach($frequency as $key => $value)
	 {
		 echo "$key => $value","<br>";
		 fwrite($myPointer1,"$key => $value");
		 
 }
 
 
 echo "<br>";
 echo "<pre>";
 //print_r($words);
 //print_r($frequency);
 echo "<pre>"
 
 
 //function myNumber($number){
 //return $number + 8;
 //offset=mynumber(0);
 //echo $offset;
 //}
 
 


?>