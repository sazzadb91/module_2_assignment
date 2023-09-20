<?php
function printEvenNumbersFor( $start, $end, $step ) {
    for ( $i = $start; $i <= $end; $i += $step ) {
        echo $i+1 ." ";
    }
    
    echo PHP_EOL;
}
printEvenNumbersFor( 1, 20, 2 );