<?php

// Rumus ke function - move to top before function definition
// Celcius
require __DIR__ . '/temperature/celcius.php';    
// Fahrenheit
require __DIR__ . '/temperature/fahrenheit.php';        
// Kelvin
require __DIR__ . '/temperature/kelvin.php';    

require __DIR__ . '/temperature/convertTemperature.php';    

if(isset($_GET['submit'])) {
   
    $temperature = $_GET['temperature'];
    $fromUnit = $_GET['fromUnit'];
    $toUnit = $_GET['toUnit'];

    $convertedValue = convertTemperature($temperature, $fromUnit, $toUnit);
}
