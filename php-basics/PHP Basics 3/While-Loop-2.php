<?php 
function fac($n){
    $res = 1;
    while($n !== 0){
        $res *= $n;
        $n--;
    }
    echo $res;
    }
    fac(6);
?>
