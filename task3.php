<?php
//Task 3: Break on Condition

//10 Fibonacci numbers
function fibonacciN($vo, $o, $n){
    for($i=0; $i<10;$i++){
        echo $vo."\n";
        $o = $n;
        $n = $o + $vo;
        $vo = $o;
    }
}

fibonacciN(0,1,1);

//Break on Condition
function fibonacciNumbers($vo, $o, $n){
    for($i=0; $i<15;$i++){
     if ($vo>100){
        break;
     }
        echo $vo." ";
        $o = $n;
        $n = $o + $vo;
        $vo = $o;
      
    }
   }

fibonacciNumbers(0,1,1);
