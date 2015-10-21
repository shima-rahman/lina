<?php
function calculator($number1,$number2,$operator)
	{
	$number1=$_POST['operand1'];
	$number2=$_POST['operand2'];
	$operator=$_POST['operator'];
	
	
		if ($operator=="+")
		{
		$result= $number1+$number2;
		echo $result;
		}
			else if($operator=="-")
			{
			$result=$number1-$number2;
			echo  $result;
			}
			
			
			else if($operator=="*")
			{
			 $result=$number1*$number2;
			 echo  $result;
			}
			
			else if($operator="/")
			{
				if($number2==0)
				{
					echo "number 2 should not be zero";
				}
				else
				{
					 $result = $number1/$number2;
					echo  $result;
			    }    
			}
			
			
		else
		{
		echo "please put number:";
		}
		return $result;
	}
	
		
?>