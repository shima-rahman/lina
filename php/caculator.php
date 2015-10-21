<?php
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$operator=$_POST['submit'];
	if($operator=="+"){
		$result=$num1+$num2;
		//echo $result;
	}
	else if($operator=="-"){
		$result=$num1-$num2;
		//echo $result;
	}
	else if($operator=="*"){
		$result=$num1*$num2;
		//echo $result;
	}
	else if($operator=="/"){
		$result=$num1/$num2;
		//echo $result;
	}
	else{
		echo "please put a number";
	}
?>
<html>
	<head>
			<link rel="stylesheet" type="text/css" href="Bootstrap/bootstrap.min.css"/>
			<script src="Bootstrap/bootstrap.min.js"></script>
	</head>
	<body>
			<form action="caculator.php" method="post">
			<p>
			<label>Number 1</label>
			<input type="text" name="num1" value="<?php echo $num1;?>"/>
			</p>
			<p>
			<label>Number 2</label>
			<input type="text" name="num2" value="<?php echo $num2;?>"/>
			</p>
			<p>
			<label>Result</label>
			<input type="text" name="result" value="<?php echo $result;?>"/><br/>
			</p>
			 
			<input type="submit" name="submit" value="+" class="btn btn-default"/>
			<input type="submit" name="submit" value="-" class="btn btn-default"/>
			<input type="submit" name="submit" value="*" class="btn btn-defULT"/>
			<input type="submit" name="submit" value="/" class="btn btn-default"/>
			</form>
	</body>
</html>
