<?php 
/**
 * this is where charmeleon gets created
 */
class Charmeleon extends Pokemon
{
	
	public function __construct()
	{
		parent::__construct('Charmeleon', EnergyType::FIRE, 60);

		$this->weakness[EnergyType::WATER] = 2;
		$this->resistance[EnergyType::LIGHTNING] = 10;

		$this->move['Head Butt'] = 10;
		$this->move['Flare'] = 30;
	}
}