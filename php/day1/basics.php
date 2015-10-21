<html>
	<?php 
		echo "<h1>Hello FTFLs!!!</h1>"."<br>";
		ECHO 'case insensitive'."<br>"; 

		$x=10;
		$y=90;
		scope($x,$y);
		
		$x=$x+100; 
		
		function scope($x,$y)
			{
			$x=$x+1;
			echo "$x,$y"."<br>";
			}
		echo "my variables in function are $x,$y";
	?>
</html>