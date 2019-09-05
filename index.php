<?php

    require_once('puricure.php');
    require_once('curewhite.php');
    require_once('cureblack.php');

    $curewhite = new Curewhite('キュアホワイト', 300, 100);

    echo $curewhite->name.'のHPは';
    echo $curewhite->hp;
    echo '<br>';
    echo $curewhite->attack();
    echo '<br>';

    $cureblack = new Cureblack('キュアブラック',200,100);

    echo $cureblack->name.'のHPは';
    echo $cureblack->hp;
    echo '<br>';
    echo $cureblack->attack();
    echo '<br>';

?>