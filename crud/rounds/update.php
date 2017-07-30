<?php
    include 'rounds.php';

    $q = new Rounds();

    $p = $q -> displayUpdate();

    echo $p;
?>

