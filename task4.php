<?php
//Task 4: Fibonacci Series pringing using a Function
function fibonacciNumbers($num){
    $vo = 0;
    $o = 1;
    $n = 1;
    for($i=0; $i<$num;$i++){
        echo $vo." ";
        $o = $n;
        $n = $o + $vo;
        $vo = $o;
      
    }
   }

fibonacciNumbers(15);