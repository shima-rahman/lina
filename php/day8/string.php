<html>
<?php
		
		if(isset($_GET["string1"])&&($_GET["string2"])){
			
			$string1 = $_GET['string1'];
			$string2 = $_GET['string2'];
			
			if($string1==$string2)
			{
				echo $string1;
			}
		
			else
			{
				echo "do not equal";
			}
		}


?>
	<body>
		<form action = "stringmatch.php" method = "get">
		First string:<input type="text"name="string1"/><br>
		Second string: <input type="text" name="string2"/><br>
		<input type="submit"name="submit"/>
		


        </form>
	</body>
</html>
