<?php 
/**
 * this is where pikachu gets created
 */
class Pikachu extends Pokemon
{
	
	public function __construct()
	{
		parent::__construct('Pikachu', 'Lightning', 60);

		$weakness = new Weakness('Fire',1.5);
		$resistance = new Resistance('Fight',20);

		$this->weakness = $weakness;
		$this->resistance = $resistance;

		/*$this->weakness->EnergyType = 'Fire'; 
		$this->weakness->multiplier = 1.5; 
		$this->resistance->EnergyType['Fight'] = 20;*/

		$this->move['Electric Ring'] = 50;
		$this->move['Pika Punch'] = 20;
	}
}