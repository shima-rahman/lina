<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>

	
	<style type="text/css">

		.red{
			color:#EC240B;
		}
		.red-shadow{
			box-shadow: 1px 2px 5px #EC240B;
			
		}
		.green{
			color:green;
		}
	</style>
</head>
<body>

	<?php
		$userName = "";
		$emailId = "";
		$contactNo = "";
		$country = "";
		$boxStyle = "";
		$boxStyle2 = "";
		
		if(isset($_GET['userName'])){
			if($_GET['userName'] == ""){
				$boxStyle = "red";
				$boxStyle2 = "red-shadow";
			}
			else{
				$boxStyle = "green";
				$userName = $_GET['userName'];
				echo "Welcome ",$userName;
			}
		}
		else{
			echo "Please Fill The Form";
		}



	?>


	<div class="container">
		<form action="registration.php" method="get">
		
			<span class="<?php echo $boxStyle;?>">Name:</span><input type="text" class="<?php echo $boxStyle2;?>" name="userName" placeholder="Name"><br>
		
			Email address:<input type="email" name="emailId" class="form-control" placeholder="Email"><br>
			Contact No.:<input type="text" name="contactNo" class="form-control" placeholder="Contact No"><br>
			Country:<input type="text" name="country" class="form-control" placeholder="Country"><br>

			 <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</body>
</html>