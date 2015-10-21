<?php
	class que{
		private $qArray = Array();
		private $index = -1;
		public function  Push($element)
		{
			//array_push($this->$stackArray,$number);
			$this->index++;
			array_unshift($this->qArray,$element);
			//$this->stackArray[$this->index] = $element;
		}
		public function Pop(){ 
			if(!$this->isEmpty()){
				return $this->qArray[$this->index--];
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
			return $this->qArray[$this->index];
		}
		function Last(){
			return $this->qArray[0];
		}
		
	}
	$myq = new que;
	$myq->push(3);
	$myq->push(4);
	$myq->push(5);
	echo "First pop is ", $myq->pop(),"<br>";
	echo "Second pop is ", $myq->pop(),"<br>";
	//echo "First value of stack is ",$myStack->First(),"<br>";
	//$myStack->pop();
	
	//echo "present index value is ",$myStack->getElement(2);
	
?>