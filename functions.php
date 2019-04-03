<?php

$numbers = array(7, 9, 8, 9, 8, 8, 6);

function printArr($numbers) {
    foreach ($numbers as $number){
        echo $number . "<br>";
    }
}

function largest($numbers) {
    echo "<br>Max num = " . max($numbers);
}

function average($numbers){
    echo "<br>Average number = " . array_sum($numbers)/count($numbers);
}