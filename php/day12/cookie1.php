<!DOCTYPE HTML>
<html>
	<head>
		<script>
		function getcookie()
		{
			console.log("After loading",document.write);
		}
		</script>
	</head>

<?php

	$displayForm=true;
	
	if (isset($_COOKIE['username']))
	{
		$displayForm=false;
		header("Location : home.php");
		//echo "welcome",$_COOKIE['username'],"<br>";
	
	}
	
	elseif(isset($_GET['username']))
	{
		$displayForm=false;
		setcookie('username',$_GET['username'],time()+1800);
		$_COOKIE['username'] = $_GET['username'];
		//header("Location : home.php");
		//echo "my cookie is" , $_COOKIE['username'];
		//echo $_COOKIE['username'];
		//echo "welcome", $_GET['username'],"<br>";
	
	
	}	
?>
	<script>
		console.log("before loading",document.write);
	</script>

<body onload="getcookie()" >
<?php
 if($displayForm){
 ?>
	
		<form action="cookie1.php" method="get" align="center">
			Username:<input type="text" name="username"/><br>
			Password:<input type="password" name="password"/><br>
			<button type="submit" name = "submit">login </button>

		</form>
		
<?php }; ?>
</body>
</html>