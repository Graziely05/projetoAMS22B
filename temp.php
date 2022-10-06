<?php
$cel = $_GET['txtCelsius'];
$fa = ($cel * 1.8) + 32;
echo "Fahrenheit: " . $fa;
?>