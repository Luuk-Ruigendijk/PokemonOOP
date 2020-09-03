<?php

class Test {
	private $name;
	private $salary;
	public function __construct($name, $salary){
		$this->name = $name;
		if ($this->__set('salary', $salary) != true) {
			$this->__set('salary', 1000);
		}
		
		
		
	}

	public function getName(){
		return $this->name;
	}

	public function setName($newName){
		if ($newName !='Jeroen') {
			$this->name = $newName;
		}
	}

	public function __get($propertyName){
		if ($propertyName == 'name'){
			return $this->name;
		}
		if ($propertyName == 'salary') {
			return $this->salary;
		}
	}

	public function __set($propertyName, $newValue){
		if ($propertyName == 'name'){
			$this->name = $newValue;
			return true;
		}
		if ($propertyName == 'salary') {
			if ($newValue >= 1000) {
				$this->salary = $newValue;
				return true;
			}
			else {
				return false;
			}
			
		}
	}
}

$test = new Test('John', 55);


echo $test->salary;

$test->salary = 9900;

$test->absurd = 1;

echo $test->salary;

?>