<?php

// Rumus ke function - move to top before function definition
// Milimeter
require __DIR__ . '/length/milimeter.php';    
// Centimeter
require __DIR__ . '/length/centimeter.php';        
// Meter
require __DIR__ . '/length/meter.php';    
// kilometer
require __DIR__ . '/length/kilometer.php';    
// inch
require __DIR__ . '/length/inch.php';    
// foot
require __DIR__ . '/length/foot.php';    
// yard
require __DIR__ . '/length/yard.php';    
// mile
require __DIR__ . '/length/mile.php';

require __DIR__ . '/length/convertLength.php';

if(isset($_GET['submit'])) {
   
    $length = $_GET['length'];
    $fromUnit = $_GET['fromUnit'];
    $toUnit = $_GET['toUnit'];

    $convertedValue = convertLength($length, $fromUnit, $toUnit);
}
