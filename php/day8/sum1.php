<html>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
	<div class="row" >
	<div class="col-md-4"></div>
		<div class="col-md-4" style="background-color:blue ;height:200px;">
			<form align="center"action="sum1.php"method="post">
				<font color="#00FF00">Enter first value:</font><input type = "number" name = "operand1"/><br>
				<font color="#00FF00">Enter second value:</font><input type = "number" name = "operand2"/><br>
				<font color="black">Result:</font> <input type= "submit" name="result"/>
			</form>
		</div>
	</div class="col-md-4"></div>
	</div>
	</body>

</html>