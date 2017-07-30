<?php
    include 'persons.php';

    $q = new Persons();

    $p = $q -> displayRead();

    echo $p;
?>

