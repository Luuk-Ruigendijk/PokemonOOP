<?php

class Pokemon
{
	private $attack;
	private $weakness;
	private $resistance;
	private $name;
	private $nickname;
	private $EnergyType;
	private $hitpoints;
	private $health;
	private static $currentLivingPokemon = 0;
	
	public function __construct($name, $nickname, $type, $maxHP, $weakness, $resistance, $attack)
	{
		$this->name = $name;
		$this->nickname = $nickname;
		$this->EnergyType = $type;
		$this->hitpoints = $maxHP;
		$this->health = $maxHP;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
		$this->attack = $attack;
		self::$currentLivingPokemon++;
	}

	public function attack($attack, $target)
	{
		$damage = $attack->damage;
		$EnergyType = $this->EnergyType;
		return $target->attacked($EnergyType, $damage);
	}

	public function attacked($EnergyType, $damage)
	{
		if ($this->weakness->EnergyType==$EnergyType) {
			$damage = $damage * $this->weakness->multiplier;
		}
		elseif ($this->resistance->EnergyType==$EnergyType) {
			$damage = $damage - $this->resistance->defense;
		}

		if ($this->health <= $damage) {
			self::$currentLivingPokemon-=1;
		}

		$this->health = $this->health - $damage;
	}

	public static function getPopulation()
	{
		return self::$currentLivingPokemon;
	}

	//if the object gets echo'd, it will return what's in the toString

	public function __toString(){
		return $this->name;
	}

	public function __get($propertyName){
		switch ($propertyName) {
			case 'name':
				return $this->name;
				break;
			case 'nickname':
				return $this->nickname;
				break;
			case 'hitpoints':
				return $this->hitpoints;
				break;
			case 'health':
				return $this->health;
				break;
			case 'attack':
				return $this->attack;
				break;
			case 'weakness':
				return $this->weakness;
				break;
			case 'resistance':
				return $this->resistance;
				break;
		}
	}

	public function __set($propertyName, $newValue){
		switch ($propertyName) {
			case 'nickname':
				$this->nickname = $newValue;
				break;
			
			case 'health':
				$this->health = $newValue;
				break;
		}
	}
}