<html>
<?php

	
	echo $result;
	if(isset($_GET['sentence']))
		{
			$string= $_GET['sentence'];
			$length=strlen($string);
			$result = uppercase($string);
		}
	
	function uppercase($string)
	{
		
			for($i=0;$i<$length;$i++)
			{
				if(ord($string[$i])>=97 && ord($string[$i])<=122)
				{
					return chr((ord($string[$i])-ord('a'))+ord('A'));
				}
				else
				{
					 
					 return $string[$i];
				}
			
			}
			
			
	    }
	
?>

	<body>
		<form action = "uppercasefunction.php" method="get">
			Given string:<input type="text" name="sentence"/>
		<br>
		<button type="submit">click here</button>
	
		</form>
	</body>

</html>