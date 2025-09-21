<?php
function convertLength($length, $fromUnit, $toUnit) {

        // Milimeter
        if($fromUnit == 'mm' && $toUnit == 'mm') {
            return $length;
        } elseif($fromUnit == 'mm' && $toUnit == 'cm') {
            return mmToCm($length);
        } elseif($fromUnit == 'mm' && $toUnit == 'm') {
            return mmToM($length);
        } elseif($fromUnit == 'mm' && $toUnit == 'km') {
            return mmToKm($length);
        } elseif($fromUnit == 'mm' && $toUnit == 'inch') {
            return mmToInch($length);
        } elseif($fromUnit == 'mm' && $toUnit == 'ft') {
            return mmToFoot($length);
        } elseif($fromUnit == 'mm' && $toUnit == 'yd') {
            return mmToYard($length);
        } elseif($fromUnit == 'mm' && $toUnit == 'mi') {
            return mmToMile($length);
        }

        // Centimeter
        elseif($fromUnit == 'cm' && $toUnit == 'cm') {
            return $length;
        } elseif($fromUnit == 'cm' && $toUnit == 'mm') {
            return cmToMm($length);
        } elseif($fromUnit == 'cm' && $toUnit == 'm') {
            return cmToM($length);
        } elseif($fromUnit == 'cm' && $toUnit == 'km') {
            return cmToKm($length);
        } elseif($fromUnit == 'cm' && $toUnit == 'inch') {
            return cmToInch($length);
        } elseif($fromUnit == 'cm' && $toUnit == 'ft') {
            return cmToFoot($length);
        } elseif($fromUnit == 'cm' && $toUnit == 'yd') {
            return cmToYard($length);
        } elseif($fromUnit == 'cm' && $toUnit == 'mi') {
            return cmToMile($length);
        }
        // Meter
        elseif($fromUnit == 'm' && $toUnit == 'm') {
            return $length;
        } elseif($fromUnit == 'm' && $toUnit == 'mm') {
            return mToMm($length);
        } elseif($fromUnit == 'm' && $toUnit == 'cm') {
            return mToCm($length);
        } elseif($fromUnit == 'm' && $toUnit == 'km') {
            return mToKm($length);
        } elseif($fromUnit == 'm' && $toUnit == 'inch') {
            return mToInch($length);
        } elseif($fromUnit == 'm' && $toUnit == 'ft') {
            return mToFoot($length);
        } elseif($fromUnit == 'm' && $toUnit == 'yd') {
            return mToYard($length);
        } elseif($fromUnit == 'm' && $toUnit == 'mi') {
            return mToMile($length);
        }

        // Kilometer
        elseif($fromUnit == 'km' && $toUnit == 'km') {
            return $length;
        } elseif($fromUnit == 'km' && $toUnit == 'mm') {
            return kmToMm($length);
        } elseif($fromUnit == 'km' && $toUnit == 'cm') {
            return kmToCm($length);
        } elseif($fromUnit == 'km' && $toUnit == 'm') {
            return kmToM($length);
        } elseif($fromUnit == 'km' && $toUnit == 'inch') {
            return kmToInch($length);
        } elseif($fromUnit == 'km' && $toUnit == 'ft') {
            return kmToFoot($length);
        } elseif($fromUnit == 'km' && $toUnit == 'yd') {
            return kmToYard($length);
        } elseif($fromUnit == 'km' && $toUnit == 'mi') {
            return kmToMile($length);
        }

        // Inch
        elseif($fromUnit == 'inch' && $toUnit == 'inch') {
            return $length;
        } elseif($fromUnit == 'inch' && $toUnit == 'mm') {
            return inchToMm($length);
        } elseif($fromUnit == 'inch' && $toUnit == 'm') {
            return inchToM($length);
        } elseif($fromUnit == 'inch' && $toUnit == 'km') {
            return inchToKm($length);
        } elseif($fromUnit == 'inch' && $toUnit == 'cm') {
            return inchToCm($length);
        } elseif($fromUnit == 'inch' && $toUnit == 'ft') {
            return inchToFoot($length);
        } elseif($fromUnit == 'inch' && $toUnit == 'yd') {
            return inchToYard($length);
        } elseif($fromUnit == 'inch' && $toUnit == 'mi') {
            return inchToMile($length);
        }

        // Foot
        elseif($fromUnit == 'ft' && $toUnit == 'ft') {
            return $length;
        } elseif($fromUnit == 'ft' && $toUnit == 'mm') {
            return ftToMm($length);
        } elseif($fromUnit == 'ft' && $toUnit == 'cm') {
            return ftToCm($length);
        } elseif($fromUnit == 'ft' && $toUnit == 'm') {
            return ftToM($length);
        } elseif($fromUnit == 'ft' && $toUnit == 'km') {
            return ftToKm($length);
        } elseif($fromUnit == 'ft' && $toUnit == 'inch') {
            return ftToInch($length);        
        } elseif($fromUnit == 'ft' && $toUnit == 'yd') {
            return ftToYard($length);
        } elseif($fromUnit == 'ft' && $toUnit == 'mi') {
            return ftToMile($length);
        }

        // Yard
        elseif($fromUnit == 'yd' && $toUnit == 'yd') {
            return $length;
        } elseif($fromUnit == 'yd' && $toUnit == 'mm') {
            return ydToMm($length);
        } elseif($fromUnit == 'yd' && $toUnit == 'cm') {
            return ydToCm($length);
        } elseif($fromUnit == 'yd' && $toUnit == 'm') {
            return ydToM($length);
        } elseif($fromUnit == 'yd' && $toUnit == 'km') {
            return ydToKm($length);
        } elseif($fromUnit == 'yd' && $toUnit == 'inch') {
            return ydToInch($length);
        } elseif($fromUnit == 'yd' && $toUnit == 'ft') {
            return ydToFoot($length);        
        } elseif($fromUnit == 'yd' && $toUnit == 'mi') {
            return ydToMile($length);
        }

        // Mile
        elseif($fromUnit == 'mi' && $toUnit == 'mi') {
            return $length;
        } elseif($fromUnit == 'mi' && $toUnit == 'mm') {
            return miToMm($length);
        } elseif($fromUnit == 'mi' && $toUnit == 'cm') {
            return miToCm($length);
        } elseif($fromUnit == 'mi' && $toUnit == 'm') {
            return miToM($length);
        } elseif($fromUnit == 'mi' && $toUnit == 'km') {
            return miToKm($length);
        } elseif($fromUnit == 'mi' && $toUnit == 'inch') {
            return miToInch($length);
        } elseif($fromUnit == 'mi' && $toUnit == 'ft') {
            return miToFoot($length);
        } elseif($fromUnit == 'mi' && $toUnit == 'yd') {
            return miToYard($length);
        }

        return $length;
}