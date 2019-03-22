<?php

class ClassName
{
	public $name;
	public $type;
	public $hp;
	
	public function __construct($name, $type, $hp)
	{
		$this->name = $name;
		$this->nickname = $name;
		$this->type = $type;
		$this->hp = $hp;
	}

	public function Attack($regular, $health)
	{
		$notification = null;
		if (isset($this->weakness[$regular])) {
			$health += $this->weakness[$regular]
		}
	}
}