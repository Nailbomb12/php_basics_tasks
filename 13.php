<?php

    $s = 120; //km
    $t = 2; // hour
    $v = $s/$t;
    $v2 = $v*1000/3600;

    echo " Your speed is {$v} km per hour, or {$v2} meters per second";
