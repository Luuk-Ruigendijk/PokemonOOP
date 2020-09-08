<?php 
/**
 * this is where pikachu gets created
 */
class Pikachu extends Pokemon
{
	public function __construct($nickname)
	{
		parent::__construct('Pikachu', $nickname, EnergyType::LIGHTNING, 60, 
			new Weakness(EnergyType::FIRE,1.5), 
			new Resistance(EnergyType::FIGHT,20), 
			[new Attack('Electric Ring', 50), new Attack('Pika Punch', 20)]);
	}
}