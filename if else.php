<?php

$per = 200;
if ($per >= 80 && $per <= 100 ){
    echo "you are in merit";
}elseif($per >=60 && $per <= 80 ){
    echo "you are in lst division";
}elseif($per >=45 && $per <= 60 ){
    echo "you are in llnd division";
 } elseif($per >=33 && $per <= 45 ){
    echo "you are in lllrd division";
 }elseif($per <=33 ){
    echo "you are fail";
 }else{
    echo"pleas enter enter the valid percentage";
 }