<?php
    
    $string="fahmida";
    $length=strlen($srirng);
    $frequency = array();
    $freq= "";
    
    for($i=0;$i<$length;$i++)
    {
        
            
	 if(array_key_exists($string[$i],$frequency))
	 {
		 $frequency.=$string([$i])+1; 
	 }
	 else
	 {
		 $frequency.=($string[$i]);
	 }
		 
    }
    print_r($frequnecy);




?>
