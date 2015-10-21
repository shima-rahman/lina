<!DOCTYPE HTML>
<html>
<?php
	include'C:/xampp/htdocs/training/php/my_function/strlen.php';

	if(isset($_GET['phonenumber']))
	{
		$phonenumber=($_GET['phonenumber']);
	}
	//blueprint
	class person
	{
		//declare class property/value
		public $name="PHP";
		public $email="php.net";
		public $phonenumber="90XXXXXX90";
	}
	
	function isBdphonenumber($phonenumber)
	{
		$length = strlen($phonenumber);
		if($length == 11)
		{
			for($i=0;$i<$length;$i++)
			{
				if($phonenumber[$i]<'0'|| $phonenumber[$i]>'11')
				{
					return false;
				}
			}
				return true;
			
		}
		else
		{
			return false;
		}
		
	}
	echo isBdphonenumber('');
	//creating object
	
	$person1 = new person;
	$person1->name="HTML";
	echo $person1->name,"<br>";
	/* 
	$person2 = new person;
	echo $person2->name;
	
	$person->setphonenumber("01834063413");
	echo $person1->phonenumber;*/
?>
	<body>
		<form action="class1.php" method="get">
			Phone number:<input type="number" name="phonenumber"/>
			<button type="submit" name="submit">Click</button>
		</form>

	</body> 
</html>