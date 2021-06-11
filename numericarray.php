<?php
    $a[0] = 10;
    $a[1] = 30;
    $a[2] = 20.20;
    $a[3] = "C";
    $a[4] = "computer";

    $a = array(10,30,20.20,"C","computer",4,5);
    echo $a[3];

    for($i=0; $i<count($a); $i++){
        echo "<br/>". $a[$i];
    }

    $sum = array_sum($a);
    echo $sum;

    echo "<pre>";
    print_r($a);
    echo "<pre>";
    var_dump($a);
?>