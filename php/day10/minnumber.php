<html>
<?php
	$numbers=[9,6,-4,5,7,8,4,2,11,15];

	function minimum($numbers)
	{
		
		$length = count($numbers);
		$min = $numbers[0];
		
		for($i=0;$i<$length;$i++)
		{
			if($min<$numbers[$i])
			{
				$min =$numbers[$i];
			}
		
		}
		return $min;
	}
	
	$result = minimum($numbers);
	echo $result;
	
?>
	