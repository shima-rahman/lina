<html>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
<?php
	
	$result= " ";
	//include "function.php";
	include "C:/xampp/htdocs/training/php/day8/function.php";
	//echo [$_SERVER["PHP_SELF"]];
	
	if(isset($_POST["operand1"])&&isset($_POST["operand2"])&&isset($_POST["operator"]))
	{
		$result=calculator($_POST["operand1"],$_POST["operand2"],$_POST["operator"]);
	}
	
		
?>

	<body>
	<div class="row" >
	<div class="col-md-4"></div>
		<div class="col-md-4" style="background-color:blue ;height:200px;">
			<form align="center"action="calculator.php"method="post">
				<font color="#00FF00">Enter first value:</font><input type = "number" name = "operand1"/><br>
				<font color="#00FF00">Enter second value:</font><input type = "number" name = "operand2"/><br>
				<input type="submit" name="operator" value="+" class="btn btn-default"/>
			    <input type="submit" name="operator" value="-" class="btn btn-default"/>
			    <input type="submit" name="operator" value="*" class="btn btn-defULT"/>
			    <input type="submit" name="operator" value="/" class="btn btn-default"/>
			</form>
		</div>
	</div class="col-md-4"></div>
	</div>
	</body>

</html>