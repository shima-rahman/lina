<html>
<?php
	if(isset($_GET['string']))
	{
		$string = $_GET['string'];
		$length=strlen($string);
		
		for($i=0;$i<$length;$i++)
		{
			echo ord($string[$i]),"<br>";
		}
	}
	

?>

	<body>
		<form action = "ASCII.php" method="get">
		Given string:<input type="text" name="string"/>
		<br>
		<button type="submit">click here</button>
	
		</form>
	</body>

</html>