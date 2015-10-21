<?php 
	include "C:/xampp/htdocs/training/php/OOP/myFunction/function.php";
	include "C:/xampp/htdocs/training/php/OOP/myFunction/stack_oop.php";
	include "C:/xampp/htdocs/training/php/OOP/myFunction/explode_functions.php";;
	
	$expression = "4 65 - 3 71 - +";
	$exparr= explode(" ",$expression);
	/*echo "<pre>"; 
	
	print_r($exparr);
	echo "</pre>";*/
	$myStack = new Stack;
	
	foreach($exparr as $operator )
	{
		$temp = intval($operator);
		if($temp)
		{
			$myStack->push($temp);
			/* echo "<pre>";
			print_r($myStack);
			echo "</pre>"; */
		}
		else
		{
			$op2 = $myStack->pop();
			$op1 = $myStack->pop();
			//echo "<br>",$op1," ",$op2," ",$operator,"<br>";
			$result = calculator($op1,$op2,$operator);
			//echo $result;
			$myStack->push($result);
		
		}
	}
	
	echo "my result is :", $myStack->pop();
	
	

?>
