<?php
    $a = 10;
    $b = 20;

    switch ($a){
        case ($a > $b): echo "$a bigger than $b"; break;
        case ($a < $b): echo "$a less than $b"; break;
        default: echo 'equal';
    }
