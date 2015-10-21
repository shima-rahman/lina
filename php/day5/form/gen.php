<html>
<head><title>form</title></head>

<?php
if(isset($_GET['user']))
{
	/*echo "Welcome : ", ($_POST["user"]),"<br>";
	echo "Your email id is : " , $_POST["email"],"<br>";*/

	echo "Welcome : ", strrev($_GET["user"]),"<br>";
	echo "Your email id is : " , $_GET["email"],"<br>";
	echo "Your contact No : ", ($_GET["number"]),"<br>";
	echo "Your email id is : " , $_GET["country"],"<br>";
	
}
else
{
echo "Please fill in the form : ";
}

?>
<script>alert('hacked')</script>
<body>
<form action="gen.php" method="get">
Username : <input type="text" name="user" value="<?php $_SERVER["PHP_SELF"];?>"/>
<br>
E-mail ID : <input type="text" name="email"/>
<br>
Contact No : <input type="number" name="number"/>
<br>
Country : <select name="country">
				<option>Bangladesh</option>
				<option>Canada</option>
				<option>London</option>
				<option>Australia</option>
				<option>America</option>
				<option>Singapur</option>
				<option>Malaysia</option>
				<option>Korea</option>
				<option>India</option>
				<option>Pakistan</option>
				<option>Nepal</option>
				<option>Butan</option>
				<option>Soudi-Arab</option>
				
				
		   </select>

<br>
<button type="submit">Submit</button>
</form>
</body>
</html>