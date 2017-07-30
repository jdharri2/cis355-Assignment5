<?php
    include 'persons.php';

    $q = new Persons();

    $p = $q -> displayUpdate();

    echo $p;
?>

