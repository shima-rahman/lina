<html>
<?php
	
		if(isset($_GET['sentence']))
		{
			$string= $_GET['sentence'];
			$length=strlen($string);
			
			for($i=0;$i<$length;$i++)
			{
				if(ord($string[$i])>=97 && ord($string[$i])<=122)
				{
					echo chr((ord($string[$i])-ord('a'))+ord('A'));
				}
				else
				{
					echo $string[$i];
				}
			
			}
			
	    }
?>

	<body>
		<form action = "uppercaseforanything.php" method="get">
			Given string:<input type="text" name="sentence"/>
		<br>
		<button type="submit">click here</button>
	
		</form>
	</body>

</html>