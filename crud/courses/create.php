<?php
    include 'courses.php';

    $q = new Courses();

    $p = $q -> displayCreateScreen();

    echo $p;
?>

