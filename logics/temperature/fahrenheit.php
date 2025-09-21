<?php
function fhToC($temperature) {
    return ($temperature - 32) * 5/9; 
}
function fhToK($temperature) {
    return ($temperature - 32) * 5/9 + 273.15; 
}
