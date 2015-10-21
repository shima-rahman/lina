<html>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
<?php
	if(isset($_POST["operand1"])&&isset($_POST["operand2"])){
	
	$number1=$_POST["operand1"];
	$number2=$_POST["operand2"];
	$operator=$_POST["submit"];
	
	
	
		if ($operator=="+")
		{
		$add= $number1+$number2;
		echo $add;
		}
			else if($operator=="-")
			{
			$sub=$number1-$number2;
			echo $sub;
			}
			
			
			else if($operator=="*")
			{
			$mul=$number1*$number2;
			echo $mul;
			}
			
			else if($operator="/")
			{
				if($number2==0)
				{
					echo "number 2 should not be zero";
				}
				else
				{
					$div = $number1/$number2;
					echo $div;
			}
			}
			
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
			<form align="center"action="calculator.php"method="post">
				<font color="#00FF00">Enter first value:</font><input type = "number" name = "operand1"/><br>
				<font color="#00FF00">Enter second value:</font><input type = "number" name = "operand2"/><br>
				<input type="submit" name="submit" value="+" class="btn btn-default"/>
			    <input type="submit" name="submit" value="-" class="btn btn-default"/>
			    <input type="submit" name="submit" value="*" class="btn btn-defULT"/>
			    <input type="submit" name="submit" value="/" class="btn btn-default"/>
				<input type="submit" name=""
			</form>
		</div>
	</div class="col-md-4"></div>
	</div>
	</body>

</html>