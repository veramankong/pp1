<?php

$numbers = array(7, 9, 8, 9, 8, 8, 6);

function printArr($numbers) {
    foreach ($numbers as $number){
        echo $number . "<br>";
    }
}

function largest($numbers) {
    echo "<br>Max num = " . max($numbers) . "<br>";
}

function average($numbers){
    echo "Average number = " . array_sum($numbers)/count($numbers) . "<br>";
}

function removeDups($numbers) {
    $newArray = array_unique($numbers);
    foreach ($newArray as $unique){
        echo $unique . "<br>";
    }
}

function distribution($numbers) {
    $distArray = array_count_values($numbers);
    ksort($distArray);
    echo "<br>";
    print_r($distArray);
}