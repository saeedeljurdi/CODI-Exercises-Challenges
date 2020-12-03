<?php 
    function sumOfDigits($n){
        $power = mb_strlen($n);
        $sum = 0;
        for ($i = 0; $i < $power; $i++) {
            $dig = $n % 10;
            $sum += $dig;
            $n /= 10;
        }
        echo $sum;
        }
        sumOfDigits(12345);
?>
