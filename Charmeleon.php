<?php 
/**
 * this is where charmeleon gets created
 */
class Charmeleon extends Pokemon
{
	
	public function __construct()
	{
		parent::__construct('Charmeleon', 'Fire', 80);

		$weakness = new Weakness('Water',2);
		$resistance = new Resistance('Lightning',10);

		$this->weakness = $weakness;
		$this->resistance = $resistance;
		/*$this->weakness->EnergyType['Water'] = 2;
		$this->resistance[EnergyType::LIGHTNING] = 10;
		$this->resistance = $resistance;
		$this->resistance->EnergyType['Lighting'] = 10;*/

		$this->move['Head Butt'] = 10;
		$this->move['Flare'] = 30;
	}
}