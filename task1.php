<?php
//Task 1: Looping with Increment using a Function

function allEvenNumbers($n1, $n2){
        for($count = $n1; $count <=$n2; $count++) {
            echo "$count \n";
        }
}

$allNumbers= allEvenNumbers(1, 20);

function isEven($n1, $n2){
    for( $i=$n1; $i<=$n2; $i++){
        if($i%2==0)
        echo "The Even Number is $i \n";
    }
    
}

isEven(1,20);