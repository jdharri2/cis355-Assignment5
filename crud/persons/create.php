<?php
    include 'persons.php';

    $q = new Persons();

    $p = $q -> displayCreateScreen();

    echo $p;
?>

