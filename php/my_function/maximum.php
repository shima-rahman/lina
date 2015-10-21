<html>
<?php
	$numbers=[9,6,-4,5,7,8,4,2,11,15];

	function maximum($numbers)
	{
		
		$length = count($numbers);
		$max = $numbers[0];
		
		for($i=0;$i<$length;$i++)
		{
			if($max<$numbers[$i])
			{
				$max=$numbers[$i];
			}
		
		}
		return $max;
	}
	
	$result = maximum($numbers);
	echo $result;
	
?>
	