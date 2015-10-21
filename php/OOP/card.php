<?php
	class card
	{
		public        $name          = "customer1";
		protected     $card_number   = "xxxx-xx-xx";
		private       $max_balance   = "10000";
		function max_balance_card()
		{
			echo $this->max_balance;
		}
	
	}
	
	class platinum extends card
	{
		function cardnumber()
		{
			 echo $this->card_number;
		}
		function max_balance_card()
		{
			echo $this->max_balance;
		
		}
		
		function print_name()
		{
			echo $this->name;
		
		}
		//private $max_platinum_balance = 100000;
		
	
	}
	
	//public
	$card_user = new card;
	$carduser->name="DDD";
	$carduser->max_balance_card="";
	
	//echo $carduser->name;
	//echo $carduser->card_number="23467u789";
	
	$pla = new platinum;
	$pla->print_name();
	$pla->max_balance_card;
	
	//protected
	$pla->cardnumber();
	



?>