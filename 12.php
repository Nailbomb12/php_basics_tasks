<?php
    $day = 1;
    switch($day){
        case ($day >= 1 && $day <= 5): echo 'Sorry, you have to work today'; break;
        case 6: echo 'Weekend'; break;
        case 7: echo 'Weekend'; break;
        default: echo 'wrong data';
    }
