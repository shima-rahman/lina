<?php

	function my_in_array( $string,$frequency)
	{
		foreach($frequency as $eachElement)
		{
			if($string==$eachElement)
			{
				return true;
			}
			
		}
		return false;
	}
	
	
?>