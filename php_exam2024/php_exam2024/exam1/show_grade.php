<?php
    $data = $_GET["data"];
    if($data >= 80 and $data <= 100){
        echo "Grade = A";
    } else if($data >= 70 and $data <= 79){
        echo "Grade = B";
    } else if($data >= 60 and $data <= 69){
        echo "Grade = C";
    } else if($data >= 50 and $data <= 59){
        echo "Grade = D";
    } else if($data >= 0 and $data <= 49){
        echo "Grade = F";
    }else{
        echo "ข้อมูลผิดพลาด";
    }

?>