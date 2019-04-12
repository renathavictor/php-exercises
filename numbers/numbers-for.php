<?php
    foreach (range(0,99) as $number) {
        $space = $number % 10 == 9 ? "\n" : " ";
        $result = $number < 10 ? "0" .$number : $number;
        echo $result .$space;
    }
?>