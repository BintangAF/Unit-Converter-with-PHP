<?php
function convertWeight($weight, $fromUnit, $toUnit) {

        // Miligram
        if($fromUnit == 'mg' && $toUnit == 'mg') {
            return $weight;
        } elseif($fromUnit == 'mg' && $toUnit == 'g') {
            return mgToG($weight);
        } elseif($fromUnit == 'mg' && $toUnit == 'kg') {
            return mgToKg($weight);
        } elseif($fromUnit == 'mg' && $toUnit == 'oz') {
            return mgToOz($weight);
        } elseif($fromUnit == 'mg' && $toUnit == 'lb') {
            return mgToLb($weight);
        } 

        // Gram
        elseif($fromUnit == 'g' && $toUnit == 'g') {
            return $weight;
        } elseif($fromUnit == 'g' && $toUnit == 'mg') {
            return gToMg($weight);
        } elseif($fromUnit == 'g' && $toUnit == 'kg') {
            return gToKg($weight);
        } elseif($fromUnit == 'g' && $toUnit == 'oz') {
            return gToOz($weight);
        } elseif($fromUnit == 'g' && $toUnit == 'lb') {
            return gToLb($weight);
        }

        // Kilogram
        elseif($fromUnit == 'kg' && $toUnit == 'kg') {
            return $weight;
        } elseif($fromUnit == 'kg' && $toUnit == 'mg') {
            return kgToMg($weight);
        } elseif($fromUnit == 'kg' && $toUnit == 'g') {
            return kgToG($weight);
        } elseif($fromUnit == 'kg' && $toUnit == 'oz') {
            return kgToOz($weight);
        } elseif($fromUnit == 'kg' && $toUnit == 'lb') {
            return kgToLb($weight);
        }

        // Ounce
        elseif($fromUnit == 'oz' && $toUnit == 'oz') {
            return $weight;
        } elseif($fromUnit == 'oz' && $toUnit == 'mg') {
            return ozToMg($weight);
        } elseif($fromUnit == 'oz' && $toUnit == 'g') {
            return ozToG($weight);
        } elseif($fromUnit == 'oz' && $toUnit == 'kg') {
            return ozToKg($weight);
        } elseif($fromUnit == 'oz' && $toUnit == 'lb') {
            return ozToLb($weight);
        }

        // Pound
        elseif($fromUnit == 'lb' && $toUnit == 'lb') {
            return $weight;
        } elseif($fromUnit == 'lb' && $toUnit == 'mg') {
            return lbToMg($weight);
        } elseif($fromUnit == 'lb' && $toUnit == 'g') {
            return lbToG($weight);
        } elseif($fromUnit == 'lb' && $toUnit == 'kg') {
            return lbToKg($weight);
        } elseif($fromUnit == 'lb' && $toUnit == 'oz') {
            return lbToOz($weight);
        }

        return $weight;
}