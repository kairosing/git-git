<?php


function fibonacci($n, $prev1 = 1, $prev2 = 0){
    $cur = $prev1 + $prev2;
    echo $cur . " ";
    if ($n > 1){
        fibonacci($n-1, $cur, $prev1);
    }
}
fibonacci(25);