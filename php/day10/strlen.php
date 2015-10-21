<html>
<?php
	if(isset($_GET['string']))
	{
	$string1=$_GET['string'];
	echo my_strlen($string1);
	}
	
	function my_strlen($string)
	{
	
		$string = $_GET['string'];
		$length= 0;
		for($i=0;isset($string[$i]);$i++)
		{
			$length++;
			
		}
			return $length;
			
		
	}
	
		
?>
	<body>
		<form action ="strlen.php" method ="get">
		Enter String:<input type="text" name ="string"/><br>
		
		<button type="submit" name="submit">click here</button>


		</form>
	</body>

</html>
