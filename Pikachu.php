<?php 
/**
 * this is where pikachu gets created
 */
class Pikachu extends Pokemon
{
	protected $attack;
	protected $weakness;
	protected $resistance;
	public function __construct()
	{
		parent::__construct('Pikachu', EnergyType::LIGHTNING, 60);

		$weakness = new Weakness(EnergyType::FIRE,1.5);
		$resistance = new Resistance(EnergyType::FIGHT,20);

		$this->weakness = $weakness;
		$this->resistance = $resistance;

		/*$this->weakness->EnergyType = 'Fire'; 
		$this->weakness->multiplier = 1.5; 
		$this->resistance->EnergyType['Fight'] = 20;*/

		$this->attack[0] = new Attack('Electric Ring', 50);
		$this->attack[1] = new Attack('Pika Punch', 20);
	}
}