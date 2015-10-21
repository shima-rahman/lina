<html>
<?php
		if(isset($_GET["string1"])&&($_GET["string2"]))
		{
			
			$string1 = $_GET['string1'];
			$string2 = $_GET['string2'];
			
		
			$length1 = strlen($string1);
			$length2 = strlen($string2);
			$sum1=0;
			$sum2=0;
			for($i=0;$i<$length1;$i++)
			{
				$sum1 = $sum1 + ord($string1[$i]);
			}
				echo $sum1;
				
			for($j=0;$j<$length2;$j++)
			{
				$sum2 = $sum2 + ord($string2[$i]);
			}
			echo $sum2;
			
		
					
					if($sum1==$sum2)
					{
						continue;
					}
					else if($sum1>$sum2)
					{
						
						echo $string2;
					}
					else
					{
						
						echo $string1;
					}
	}				
	
?>

	<body>
		<form action ="dictionary.php" method ="get">
		First string:<input type="text" name ="string1"/><br>
		Second string:<input type="text" name="string2"/><br>
		<button type="submit" name="submit">click here</button>


		</form>
	</body>

</html>