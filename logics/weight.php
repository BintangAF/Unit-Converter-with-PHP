<?php

// Rumus ke function - move to top before function definition
// Miligram
require __DIR__ . '/weight/miligram.php';    
// Gram
require __DIR__ . '/weight/gram.php';        
// Kilogtam
require __DIR__ . '/weight/kilogram.php';    
// Ounce
require __DIR__ . '/weight/ounce.php';    
// Pound
require __DIR__ . '/weight/pound.php';    

require __DIR__ . '/weight/convertWeight.php';    


if(isset($_GET['submit'])) {
   
    $weight = $_GET['weight'];
    $fromUnit = $_GET['fromUnit'];
    $toUnit = $_GET['toUnit'];

    $convertedValue = convertWeight($weight, $fromUnit, $toUnit);
}
