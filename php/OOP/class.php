<?php
	//blueprint
	class person
	{
		//declare class property/value
		public $name="PHP";
		public $email="php.net";
		public $phonenumber="90XXXXXX90";
		
	
	}
	
	//function person()
	//{
		//return 3;
	//}
	//creating object
	
	$person1 = new person();
	$person1->name="HTML";
	echo $person1->name,"<br>";
	
	$person2 = new person();
	echo $person2->name;


?>