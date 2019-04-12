<?php 
    foreach (range(99,0) as $number) {
        if ($number & 0x1) {
            $space = $number % 10 === 1 ? "\n" : " ";
            $addZero = $number < 10 ? "0".$number : $number;
            echo $addZero .$space;
        }
    }
?>