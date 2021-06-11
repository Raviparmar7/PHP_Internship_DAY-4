<?php

    $a[0] = 10;
    $a[1] = 30;
    $a[2] = 20.20;
    $a["c"] = "Computer";
    $a["php"] = "Web Development";
    $a[10]="Ten";

    $a = array (
        0 => 10,
        1 => 30,
        "c" => "Computer",
        "php" => "Web Development",


    );

    echo "C for".$a["c"];
    
    foreach ($a as $value){
        echo "<br> Value is $value";

    }

    foreach ($a as $key => $value){
        echo"<br/> Key is $key and Value is $value";
    }
    echo "<pre>";
    print_r($a);
    echo "<pre>";
    var_dump($a);

?>