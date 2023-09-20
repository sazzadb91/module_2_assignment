<?php
function febonaschi( $n ) {
    $veryold = 0;
    $old = 1;
    $new = 1;
    for ( $i = 0; $i <$n; $i++ ) {
        echo $veryold . " ";
        $old = $new;
        $new = $veryold + $old;
        $veryold = $old;
    }
    
}
febonaschi( 15 );