<?php 

class Weakness
{
	public $EnergyType;
	public $multiplier;
	
	function __construct($EnergyType, $multiplier)
	{
		$this->EnergyType = $EnergyType;
		$this->multiplier = $multiplier;
	}
} 
?>