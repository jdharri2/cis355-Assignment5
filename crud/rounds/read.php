<?php
    include 'rounds.php';

    $q = new Rounds();

    $p = $q -> displayRead();

    echo $p;
?>

