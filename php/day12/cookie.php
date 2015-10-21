<!DOCTYPE HTML>
<html>
<script>
	//function getcookie()
	/*{*/
		console.log("After loading",document.write);
	/*}*/

</script>

<?php

	$displayForm=true;
	
	if (isset($_COOKIE["username"]))
	{
		$displayForm=false;
		echo "welcome",$_COOKIE["username"],"<br>";
	
	}
	
	elseif(isset($_GET["username"]))
	{
		$displayForm=false;
		setcookie("username",$_GET["username"],time()+1800);
		
		echo "my cookie is" , $_COOKIE["username"];
		//echo $_COOKIE["username"];
		echo "welcome", $_GET["username"],"<br>";
	
	
	}	
/*?>*/
<script>
	console.log("Before loading",document.cookie);


</script>

<body onload="getcookie">
/*<?php*/
 if($displayForm){?>
	
		<form action="cookie.php" method="get">
			Username:<input type="text" name="username"/><br>
			Password:<input type="password" name="password"/><br>
			<button type="submit" name = "submit">login </button>

		</form>
		
<?php } ?>
</body>
</html>