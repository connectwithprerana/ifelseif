<?php

$x = 15;
($x > 20)?$z = "greater": $z="smaller<br>";
echo $z;

$z = "value is: ". ($x > 20 ? "greater":"smaller");
echo $z;
?>