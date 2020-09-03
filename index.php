<?php
	require 'Pokemon.php';
	require 'Weakness.php';
	require 'Resistance.php';
	require 'Attack.php';
	require 'EnergyType.php';
	require 'Pikachu.php';
	require 'Charmeleon.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>pokebattle</title>
	</head>
	<body>
		<?php $pikachu = new Pikachu(); ?>
		<?php $charmeleon = new Charmeleon(); ?>
		<p><?php echo $charmeleon->nickname; ?> has <?php echo $charmeleon->health; ?> HP</p>
		<br>
		<p><?php echo $pikachu->nickname; ?> used <?php echo $pikachu->attack[0]->attack ?></p>
		<?php $pikachu->attack($pikachu->attack[0], $charmeleon); ?>
		<br>
		<p><?php echo $charmeleon->nickname; ?> has <?php echo $charmeleon->health; ?> HP</p>
		<br>
		<p><?php echo $pikachu->nickname; ?> has <?php echo $pikachu->health; ?> HP</p>
		<br>
		<p><?php echo $charmeleon->nickname; ?> used <?php echo $charmeleon->attack[1]->attack ?></p>
		<?php $charmeleon->attack($charmeleon->attack[1], $pikachu); ?>
		<br>
		<p><?php echo $pikachu->nickname; ?> has <?php echo $pikachu->health; ?> HP</p>
		<br>		
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>