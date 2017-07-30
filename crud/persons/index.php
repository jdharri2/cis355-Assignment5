<?php
	include 'persons.php';

	$q = new Persons();

	$p = $q -> displayListScreen();

	echo $p;
?>
