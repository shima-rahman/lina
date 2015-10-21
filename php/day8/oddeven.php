<html>
<?php
		
		if(isset($_GET["number"])){
			
			$number = $_GET['number'];
			
			
			if($number%2==0)
			{
				echo "even";
			}
		
			else
			{
				echo "odd";
			}
		}


?>
	<body>
		<form action = "oddeven.php" method = "get">
		First number:<input type="number"name="number"/><br>
	
		<input type="submit"name="submit"/>
		


        </form>
	</body>
</html>
