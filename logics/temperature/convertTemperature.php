<?php
function convertTemperature($temperature, $fromUnit, $toUnit) {

        // Celcius
        if($fromUnit == 'c' && $toUnit == 'c') {
            return $temperature;
        } elseif($fromUnit == 'c' && $toUnit == 'f') {
            return cToF($temperature);
        } elseif($fromUnit == 'c' && $toUnit == 'k') {
            return cToK($temperature);
        }

        // Fahrenheit
        elseif($fromUnit == 'f' && $toUnit == 'f') {
            return $temperature;
        } elseif($fromUnit == 'f' && $toUnit == 'c') {
            return fhToC($temperature);
        } elseif($fromUnit == 'f' && $toUnit == 'k') {
            return fhToK($temperature);
        }

        // Kelvin
        elseif($fromUnit == 'k' && $toUnit == 'k') {
            return $temperature;
        } elseif($fromUnit == 'k' && $toUnit == 'c') {
            return kToC($temperature);
        } elseif($fromUnit == 'k' && $toUnit == 'f') {
            return kToF($temperature);
        }
        
        return $temperature;
}