<?php
function kToC($temperature) {
    return $temperature - 273.15; 
}
function kToF($temperature) {
    return ($temperature - 273.15) * 9/5 + 32; 
}