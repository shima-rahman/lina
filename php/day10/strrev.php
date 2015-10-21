<html>
<?php

	if (isset($_GET['string']))
	{

	$string = $_GET['string'];
	$length = strlen($string);
	$string1=" ";
	while($length>0)
	{
		$length--;
		$string1.=$string{$length};
	}
	echo $string1;
	}
?>
	<body>
		<form action="strrev.php" method="get">
		Enter String : <input type="text" name="string">
		<br>
		<button type="submit"input type="submit">Click here</button>
	</body>

</html>