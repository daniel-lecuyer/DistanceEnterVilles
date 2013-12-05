<?php
function partOfNumber($percent, $number) { 
    return $percent * $number;
    
}
function litersSpentByKilometers($litersSpentPerHundredKilometers, $amountOfKilometers) {
    $literSpentPerKilometer = $litersSpentPerHundredKilometers / 100;
    return $literSpentPerKilometer * $amountOfKilometers;
    
}

$number = 500;
$percent = 1 / 3;
$litersSpentPerHundredKilometers = 10;

$distanceMontrealDrummondville = partOfNumber($percent, $number);
$distanceDrummondvilleRiviereDuLoup = $number - $distanceMontrealDrummondville;
$literSpentBetweenDrummondvilleRiviereDuLoup = litersSpentByKilometers($litersSpentPerHundredKilometers, $distanceDrummondvilleRiviereDuLoup);
echo PHP_EOL."We spent: ".$literSpentBetweenDrummondvilleRiviereDuLoup." liters between Drummondville and Riviere-du-Loup".PHP_EOL;
