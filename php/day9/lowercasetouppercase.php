<html>
<?php
	
		if(isset($_GET['sentence']))
		{
			$string= $_GET['sentence'];
			$length=strlen($string);
			
			for($i=0;$i<$length;$i++)
			{
			
			echo chr((ord($string[$i])-ord('a'))+ord('A'));
			}
			
	    }
?>

	<body>
		<form action = "lowercasetouppercase.php" method="get">
			Given string:<input type="text" name="sentence"/>
		<br>
		<button type="submit">click here</button>
	
		</form>
	</body>

</html>