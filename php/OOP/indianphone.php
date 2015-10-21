<?php
	class person
	{
		//declare class property/value
		public $name="PHP";
		public $email="php.net";
		public $phonenumber="90XXXXXX90";
	
	
		function setphonenumber($phonenumber)
		{
			if(isphonenumber($phonenumber))
			{
				$this->phonenumber = $phonenumber;
			}
			else
			{
				echo "please provide valid phpone number";
			}
		}
	}



	 class guest extends person
	 {
		public $indianphonenumber="";
		
		function  setindianphonenumber($phonenumber)
		{
			if(isphonenumber($phonenumber.'0'))
			{
				$this->indianphonenumber=$phonenumber;
			}
			else
			{
				echo "please provide a valid phone number";
			}
		 
		}
	 }
 
	$indian = new guest;
	$indian->name="Daniel";
	$indian->email="soumenseth@gmail.com";
	$indian->setindianphonenumber("8008900910");
	$indian->setphonenumber("8008900910");
	echo $indian->name,"<br>";
	echo $indian->email,"<br>";
	echo $indian->phonenumber,"<br>";
	echo $indian->indianphonenumber,"<br>";
 
 
 ?>