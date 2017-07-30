<?php
    include 'courses.php';

    $q = new Courses();

    $p = $q -> displayUpdate();

    echo $p;
?>

