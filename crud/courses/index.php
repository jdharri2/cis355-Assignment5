<?php
	include 'courses.php';

	$q = new Courses();

	$p = $q -> displayListScreen();

	echo $p;
?>
