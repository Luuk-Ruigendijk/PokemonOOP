<?php 
/**
 * this is where charmeleon gets created
 */
class Charmeleon extends Pokemon
{
	protected $attack;
	protected $weakness;
	protected $resistance;
	public function __construct()
	{
		parent::__construct('Charmeleon', EnergyType::FIRE, 80);

		$weakness = new Weakness(EnergyType::WATER,2);
		$resistance = new Resistance(EnergyType::LIGHTNING,10);

		$this->weakness = $weakness;
		$this->resistance = $resistance;
		/*$this->weakness->EnergyType['Water'] = 2;
		$this->resistance[EnergyType::LIGHTNING] = 10;
		$this->resistance = $resistance;
		$this->resistance->EnergyType['Lighting'] = 10;*/

		$this->attack[0] = new Attack('Head Butt', 10);
		$this->attack[1] = new Attack('Flare', 30);
	}
}