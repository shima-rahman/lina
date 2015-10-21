<html>
<?php
	if (isset($_POST['operand1'])&&($_POST['operand2'])){
	$number1=$_POST['operand1'];
	$number2=$_POST['operand2'];
	
	$result= $number1+$number2;
    echo $result;

	}
	else
	{
	echo "please put number:";
	}
	
?>

<body>
	<form action="sum.php"method="post">
		Enter first value:<input type = "number" name = "operand1"/><br>
		Enter second value:<input type = "number" name = "operand2"/><br>
		Result: <input type= "submit" name="result"/>
	</form>
</body>

</html>