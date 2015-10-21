<html>
<?php
	
		if(isset($_GET['sentence']))
		{
			$string= $_GET['sentence'];
			
			$result = lowercase($string);
			echo $result;
		}
			
			
		function lowercase($string)
		{
			$length=strlen($string);
			$low = " ";
		
			for($i=0;$i<$length;$i++)
			{
				if(ord($string[$i])>=ord('A')&& ord($string[$i])<=ord('Z'))
				{
						 $str = chr((ord($string[$i])+ord('a'))-ord('A'));
						
				}
				else
				{
					$str = $string[$i];
				}
				$low.=$str;
			}
		return $low;
		}
?>

	<body>
		<form action = "lowercasefunction.php" method="get">
			Given string:<input type="text" name="sentence"/>
		<br>
		<button type="submit">click here</button>
	
		</form>
	</body>

</html>