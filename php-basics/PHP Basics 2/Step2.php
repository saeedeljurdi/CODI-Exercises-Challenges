<?php 
    function greaterFn($num){ if($num > 30) { return "${num} is greater than 30\n"; }
    else if($num > 20){ return "${num} is greater than 20\n";}
    else if($num > 10){ return "${num} is greater than 10\n";}
    else { return "${num} is less than 10\n"; }
    }
    echo greaterFn(8);
?>
