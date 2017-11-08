<?php
$name = 'Kenny';
$age = -78;

    if ($age >= 18 && $age <= 59){
        echo 'Sorry, you have to work a lot';
    }
    else if ($age > 59) {
        echo "You can enjoy your life";
    }
    else if ($age >0 && $age <18){
        echo "You are too young to work";
    }
    else
        echo 'Wrong data';
