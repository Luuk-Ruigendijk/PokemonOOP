<?php 

class Resistance
{
	public $EnergyType;
	public $defense;
	
	function __construct($EnergyType, $defense)
	{
		$this->EnergyType = $EnergyType;
		$this->defense = $defense;
	}
} ?>