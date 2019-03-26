<?php

class Pokemon
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

	public function GetAttacked($regular, $health)
	{
		$notification = null;
		if (isset($this->weakness[$regular])) {
			$health += $this->weakness[$regular];
			$notification = 'It\'s very effective!';
		}
		if (isset($this->resistance[$regular])) {
			$health += $this->resistance[$regular];
			$notification = 'It\'s not very effective...';
		}
		if ($health <= 0) {
			$health = 0;
			return 'The attack had no effect!';
		}
		$this->hp -= $health;
		if ($this->hp <= 0) {
			return $this->nickname. 'has been defeated';
		}
		if ($notification = null) {
			return $notification;
		}else{
			return $this->nickname. ' has ' .$this->hp;
		}
	}
//victim is who gets attacked.
	function Attack($attackName, $victim)
	{
		$attackDamage = $this->move[$attackName];
		$type = $this->type;
		return $victim->attacked($type, $attackDamage);
	}
}