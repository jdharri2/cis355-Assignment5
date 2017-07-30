<?php
    include 'persons.php';

    $q = new Persons();

    $p = $q -> displayDelete();

    echo $p;
?>

