<html>
<?php 
	$string="Fahmida";
	$string1="";
	
	$length=strlen($string);
	
	while($length>0)
	{
		$length--;
		$string1.=$string{$length};
		
		
	}
	echo $string1."<br>";
	

?>
	<body>
		<form action="str_rev.php" method="get">
		
		Given string : <input type="text" name ="string"/>
		<br>
		<button type="submit">click here</button>
		
		</form>
	
	</body>
</html>