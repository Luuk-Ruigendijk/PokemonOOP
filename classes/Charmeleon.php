<?php 
/**
 * this is where charmeleon gets created
 */
class Charmeleon extends Pokemon
{
	public function __construct($nickname)
	{
		parent::__construct('Charmeleon', $nickname, EnergyType::FIRE, 80, 
			new Weakness(EnergyType::WATER,2), 
			new Resistance(EnergyType::LIGHTNING,10), 
			[new Attack('Head Butt', 10), new Attack('Flare', 30)]);
	}
}