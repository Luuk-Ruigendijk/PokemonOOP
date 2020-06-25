<?php

class Pokemon
{
	public $name;
	public $nickname;
	public $EnergyType;
	public $hitpoints;
	public $health;
	
	public function __construct($name, $type, $maxHP)
	{
		$this->name = $name;
		$this->nickname = $name;
		$this->EnergyType = $type;
		$this->hitpoints = $maxHP;
		$this->health = $maxHP;
	}

	public function attack($attackName, $target)
	{
		$damage = $this->move[$attackName];
		$EnergyType = $this->EnergyType;
		return $target->attacked($EnergyType, $damage);
	}

	public function attacked($EnergyType, $attackDamage)
	{
		//return $type . "<br>" . $attackDamage . $target;
		if ($this->weakness->EnergyType==$EnergyType) {
			$attackDamage = $attackDamage * $this->weakness->multiplier;
		}
		elseif ($this->resistance->EnergyType==$EnergyType) {
			$attackDamage = $attackDamage - $this->resistance->defense;
		}

		$this->health = $this->health - $attackDamage;
	}
	
	/*
	public function GetAttacked($regular, $health)
	{
		//set notification to null
		$notification = null;
		//if the attack is of the type you're weak to, set notification to "it's very effective"
		if (isset($this->weakness[$regular])) {
			$health += $this->weakness[$regular];
			$notification = 'It\'s very effective!';
		}
		//if the attack is of the type you're resistant to, set notification to "it's not very effective"
		if (isset($this->resistance[$regular])) {
			$health += $this->resistance[$regular];
			$notification = 'It\'s not very effective...';
		}
		//if your health is at zero or less, say "the attack had no effect"
		if ($health <= 0) {
			$health = 0;
			return 'The attack had no effect!';
		}
		//if the health gets to 0, say that the current pokemon is defeated
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
	public function Attack($attackName, $victim)
	{
		$attackDamage = $this->move[$attackName];
		$type = $this->type;
		return $victim->attacked($type, $attackDamage);
	}

	function GrantNickname($name, $nickname)
	{
		$pokemon[$name]->GrantNickname();
	}

	function Nickname($nickname)
	{
		$this->Nickname = $nickname;
	}
	*/

} 
class EnergyType
	{
		/*function __construct()
		{
			
		}*/
		const FIRE = 0;
		const FIGHT = 0;
		const WATER = 0;
		const LIGHTNING = 0;
	} 

	