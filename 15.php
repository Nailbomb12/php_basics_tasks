<?php
    $a = 4;                         // ввести число
    $b = 2;                         // ввести число
    $operator = '+'|| '-' || '*' || '/' || '%';
    $c = & $operator;
    $c = '/';                       // действие

    switch ($c){
        case '+' : echo $a + $b; break;
        case '-' : echo $a - $b;break;
        case '*' : echo $a * $b; break;
        case '/' :
            if ($b == 0){
                echo "<h1>ERROR</h1>";
            break;
        }
            else
                echo $a / $b; break;
        case '%' : echo $a % $b; break;
        };
