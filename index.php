<?php
	require 'Pokemon.php';
	require 'Weakness.php';
	require 'resistance.php';
	require 'Pikachu.php';
	require 'Charmeleon.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>pokebattle</title>
	</head>
	<body>
		<h2>Pikachu</h2>
		<button onclick="attack('Electric Ring', 'Charmeleon')">Use Electric Ring</button>
		<button>Use Pika Punch</button>
		<h2>Charmeleon</h2>
		<?php $pikachu = new Pikachu(); ?>
		<?php $charmeleon = new Charmeleon(); ?>

		<?php echo $charmeleon->health; ?>

		<br>

		<?php $pikachu->attack('Electric Ring', $charmeleon); ?>
		<br>
		<?php echo $charmeleon->health; ?>
		<br>
		<?php echo $pikachu->health; ?>
		<br>
		<?php $charmeleon->attack('Flare', $pikachu); ?>
		<br>
		<?php echo $pikachu->health; ?>
		<br>
		
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>