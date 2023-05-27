<?php

$weekday = 5;

switch ($weekday){
    case 1: case 2: case 3:
        echo "today is monday";
        echo "<br> this is just  test.";
    break;
    
    case 4:
         echo "today is thursday";
    break;
    case 5:
         echo "today is friday";
    break;
    case 6:
         echo "today is saturday";
    break;
    case 7:
        echo "today is sunday";
     break;
     default:
         echo "enter the valid weekday";
             
}