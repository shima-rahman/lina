<html>
<?php
		if(isset($_GET["string1"])&&($_GET["string2"]))
		{
			$string1 = $_GET['string1'];
			$string2 = $_GET['string2'];
			$length1 = strlen($string1);
			$length2 = strlen($string2);
			$flag = 0;
			
			if($length1==$length2)
			{
				 for($i=0;$i<$length1;$i++)
				 {
					for($j=0;$j<$length2;$j++)
					
					{
						if($string1{$i}==$string2 {$j})
						{
							if($i==$length1-1)
							{
								echo "true";	
							}
							break;
						}
						elseif($j==$length2-1)
						{
							$flag=-1;	
						}
					}
					
					if($flag==-1)
					{
						echo "false";
						break;
					}
				 }
			
			}
			else
			{
				echo "This is not anagram";
			}
			
		}


?>

	<body>
		<form action ="anagram.php" method ="get">
		First string:<input type="text" name ="string1"/><br>
		Second string:<input type="text" name="string2"/><br>
		<button type="submit" name="submit">click here</button>


		</form>
	</body>

</html>