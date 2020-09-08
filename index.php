<?php
	spl_autoload_register(function ($class_name) {
		include "classes/" . $class_name . '.php';
	});
?>

<!DOCTYPE html>
<html>
	<head>
		<title>pokebattle</title>
	</head>
	<body>
		<?php $pikachu = new Pikachu("Pikapika"); ?>
		<?php $charmeleon = new Charmeleon("Firestuff"); ?>
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
		<p>current living pokemons: <?php echo Pokemon::getPopulation() ?></p>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>