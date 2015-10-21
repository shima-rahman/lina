<?php
	class Stack 
	{
		private $stackArray = Array();
		private $index = -1;
		
		public function push($element)
		{
			$this->index++;
			array_push($this->stackArray,$element);
			//$this->stackArray[$this->index]=$element;
		}
		public function pop()
		{
			if(!$this->isEmpty())
			{
				return $this->stackArray[$this->index--];
			}
			echo "Empty stack , nothing to pop";
		
		}
		public function first()
		{
			return $this->stackArray[$this->index];
		}
		public function last()
		{
			return $this->stackArray[0];
		}
		
		public function GetElement($position)
		{
			if($position <= $this->index+1)
			{
				$arrayposition = $this->index +1 -$position;
				return $this->stackArray();
			}
			echo "invalid position","<br>";
			
		}
	}
	
	$mystack = new stack;
	
	$mystack->push(1);
	$mystack->push(4);
	$mystack->push(5);
	
	echo $mystack->first() ,"<br>";
	echo $mystack->last();
	
	//$mystack->pop()
	//echo $mystack->pop();
	echo $mystack->pop();
	
	//$mystack->pop();
	
	echo $mystack->GetElement();
	

?>