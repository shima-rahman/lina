<html>
<?php
	
		if(isset($_GET['sentence']))
		{
			$string= $_GET['sentence'];
			$result = uppercase($string);
			echo $result;
		}
		function uppercase($string)
        {		
			$length=strlen($string);
			$up ="";
		
			for($i=0;$i<$length;$i++)
			{
				if(ord($string[$i])>=97 && ord($string[$i])<=122)
				{
					$str = chr((ord($string[$i])-ord('a'))+ord('A'));
				}
				else
				{
					$str = $string[$i];
				}
				$up .= $str;
			
			}
			return $up;
			
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