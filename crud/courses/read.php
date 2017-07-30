<?php
    include 'courses.php';

    $q = new Courses();

    $p = $q -> displayRead();

    echo $p;
?>

