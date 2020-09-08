<?php /**
 * 
 */
class Attack
{
	public $attack;
	public $damage;
	
	function __construct($attack, $damage)
	{
		$this->attack = $attack;
		$this->damage = $damage;
	}
} ?>