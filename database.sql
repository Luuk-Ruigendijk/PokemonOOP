CREATE DATABASE IF NOT EXISTS `pokemons`;
USE `pokemons`;

CREATE TABLE `pokemon` (
  `pokemon_id` int(11) NOT NULL,
  `pokemon_name` varchar(60) NOT NULL,
  `pokemon_EnergyType` varchar(60) NOT NULL,
  `pokemon_hitpoints` varchar(60) NOT NULL,
  `pokemon_weakness` varchar(60) NOT NULL,
  `pokemon_weaknessMultiplier` int(60) NOT NULL,
  `pokemon_resistance` varchar(60) NOT NULL,
  `pokemon_resistanceMultiplier` int(60) NOT NULL,
  `pokemon_attack1` varchar(60) NOT NULL,
  `pokemon_attack1Damage` int(60) NOT NULL,
  `pokemon_attack2` varchar(60) NOT NULL,
  `pokemon_attack2Damage` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pokemon` (`pokemon_id`, `pokemon_name`, `pokemon_EnergyType`, `pokemon_hitpoints`, `pokemon_weakness`, `pokemon_weaknessMultiplier`, `pokemon_resistance`, `pokemon_resistanceMultiplier`, `pokemon_attack1`, `pokemon_attack1Damage`, `pokemon_attack2`, `pokemon_attack2Damage`) VALUES
(1, 'Pikachu', 'Lightning', 60, 'fire', 1.5, 'fighting', 20, 'Electric Ring', 50, 'Pika Punch', 20),
(2, 'Charmeleon', 'Fire', 60, 'water', 2, 'lightning', 10, 'Head Butt', 10, 'Flare', 30);



ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`pokemon_id`);



ALTER TABLE `pokemon`
  MODIFY `pokemon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;