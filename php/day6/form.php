<html>
	<head><title>security of form</title></head>
	<style>
		.error
			{
			border-style:solid;
			border-color:black;
			}
		.red
			{
			text-color:red;
			}
			
		.success
			{
			border-color:blue;
			}

	</style>
	
	<body>
		$name = " ";
		$email = " ";
		$contact = " ";
		$country = " ";
		
		<form action "<?php echo $_SERVER["PHP_SELF"];?>">
			<input type ="text" name = "name" value="name"/>
			
		
		
		
		

		</form>
	
	</body>



</html>