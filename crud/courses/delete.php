<?php
    include 'courses.php';

    $q = new Courses();

    $p = $q -> displayDelete();

    echo $p;
?>

