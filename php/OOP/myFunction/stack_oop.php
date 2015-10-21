<?php
	class Stack{
		private $stackArray = Array();
		private $index = -1;
		public function Push($element){
			//array_push($this->$stackArray,$number);
			$this->index++;
			$this->stackArray[$this->index] = $element;
		}
		public function Pop(){ 
			if(!$this->isEmpty()){
				return $this->stackArray[$this->index--];
			}
			else{
				echo "Empty stack!! Nothing to pop";
			}
		}
		public function isEmpty(){
			if($this->index == -1){
				return true;
			}
			else{
				return false;
			}
		}
		function First(){
			return $this->stackArray[$this->index];
		}
		function Last(){
			return $this->stackArray[0];
		}
		public function getElement($position){
			if($position<=$this->index+1){
				$arrayPosition = $this->index+1-$position;
				return $this->stackArray[$arrayPosition];
			}
			else{
				echo "Invalid";
			}
		}
	}
	$myStack = new Stack;
	$myStack->push(1);
	$myStack->push(4);
	$myStack->push(5);
	echo "First pop is ", $myStack->pop(),"<br>";
	echo "Second pop is ", $myStack->pop(),"<br>";
	echo "First value of stack is ",$myStack->First(),"<br>";
	$myStack->pop();
	
	echo "present index value is ",$myStack->getElement(2);
	
?>