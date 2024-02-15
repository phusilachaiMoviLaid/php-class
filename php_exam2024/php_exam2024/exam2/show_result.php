<?php
    $op = $_GET['op'];
    $data1 = $_GET["data1"];
    $data2 = $_GET["data2"];

    if($op == "sum"){
        echo ($data1 + $data2);
    }else if($op == "sub"){
        echo ($data1 - $data2);
    }else if($op == "mul"){
        echo ($data1 * $data2);
    }else if($op == "div"){
        echo ($data1 / $data2);
    }


?>