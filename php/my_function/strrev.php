<html>
<?php

	function my_rev_string($string)
	{
		$length = strlen($string);
		$string1=" ";
		while($length>0)
		{
			$length--;
			$string1.=$string{$length};
		}
		echo $string1;
	}
?>
	