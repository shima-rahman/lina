<html>
<?php
	$string= "fahmida";
		
	$length=strlen($string);
		
		for($i=0;$i<$length;$i++)
		{
		$message=ord($string{$i})-ord($string)+ord("FAHMIDA");
		echo chr($message);
		}
	

?>
