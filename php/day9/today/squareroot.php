<?php
	$number=3;
	$lower=1;
	$upper=$n;
	$mid=($upper+$lower)/2;
	$midsqr=$mid*$mid;
	while(($midsqur-$number)<0.001)
	{
		$mid=($upper+$lower)/2;
		$midsqr=$mid*$mid;
		
		if($midsqr>$number)
			{
			$upper=$mid;
			}
		else
		{
			$lower=$mid;
		}
		echo $mid,"<br>";

	}


?>