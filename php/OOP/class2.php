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
	
	
		function setphonenumber($phonenumber)
		{
			if(isBdphonenumber($phonenumber))
			{
				$this->phonenumber = $phonenumber;
			}
			else
			{
				echo "please provide valid phpone number";
			}
		}
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
	
	$person2 = new person;
	echo $person2->name;
	
	$person1->setphonenumber("01834063413");
	echo $person1->phonenumber;
	
	
?>
	