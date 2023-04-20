<?php
$h = 1.80;
$w = 58;
$kof = sqrt($h*$w/3600);

echo ("Mit". $h ."m Körpergröße und ". $w . "kg Körpergewicht ist die Körperfläche ".round($kof,2). "m2");