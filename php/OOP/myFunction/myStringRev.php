<?php
  
  
	function my_rev_string($string)
	{

		$revStr = "";

		$length = strlen($string);

			for($i=$length-1; $i>=0; $i--)
			{
				$revStr .= $string[$i];
			}
		return $revStr;
	}

?>