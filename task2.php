<?php
//Task 2: Skip Multiples of 5

function allEvenNumbers($n1, $n2){
        for($count = $n1; $count <=$n2; $count++) {
            echo "$count \n";
        }
}

$allNumbers= allEvenNumbers(1,50);

function iskipMultiplesOf5($n1, $n2){
    for( $i=$n1; $i<=$n2; $i++){
        if($i % 5==!0)
        echo "Skip Multiples by 5 is $i \n";
    }
    
}

iskipMultiplesOf5(1,50);