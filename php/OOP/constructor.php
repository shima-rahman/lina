<?php
	class person
	{
		private $name="DDD";
		
		public function __construct($name)
		{
			echo "My class is ".__class__;
			$this->name = $name;
		
		}
		public function setName($name)
		{
			$this->name = $name;
		
		}
		public function printName()
		{
			echo $this->name;
		}
	}
	
	//$d = new person;
	$person1 = new person("poly");
	$person1->printName();

?>