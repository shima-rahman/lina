<html>
<?php

		function my_in_array( $string,$frequency)
		{
		foreach($frequency as $eachElement)
		{
			if($string==$eachElement)
			{
				return true;
			}
			
		}
		return false;
		}
		
		
		if(isset($_GET["string1"])&&($_GET["string2"]))
		{
			$string1 = $_GET['string1'];
			$string2 = $_GET['string2'];
			$length1 = strlen($string1);
			$length2 = strlen($string2);
			
			$arr=array();
			
			
			if($length1==$length2)
			{
				 for($i=0;$i<$length1;$i++)
				 {
					for($j=0;$j<$length2;$j++)
					
					{
						if($string1[$i]==$string2[$j])
						{
							if(my_in_array($j,$arr))
							{
								continue;
							}
							else
							{
								array_push($arr,$j);
								
								
							}
							if($i==$length1-1)
							{
								echo "true";	
							}
							break;
						}
					}
					
					if($j==$length2)
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
		<form action ="anagram1.php" method ="get">
		First string:<input type="text" name ="string1"/><br>
		Second string:<input type="text" name="string2"/><br>
		<button type="submit" name="submit">click here</button>


		</form>
	</body>

</html>