<?php 
/**
 * this is where pikachu gets created
 */
class Pikachu extends Pokemon
{
	
	public function __construct()
	{
		parent::__construct('Pikachu', EnergyType::LIGHTNINGS, 60);

		$this->weakness[EnergyType::FIRE] = 1.5;
		$this->resistance[EnergyType::FIGHT] = 20;

		$this->move['Electric Ring'] = 50;
		$this->move['Pika Punch'] = 20;
	}
}