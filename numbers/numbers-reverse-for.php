<?php 
    foreach (range(99, 0) as $number) {
        $space = $number % 10 === 0 ? "\n" : " ";
        $addZero = $number < 10 ? "0".$number : $number;
        echo $addZero .$space;
    }
?>