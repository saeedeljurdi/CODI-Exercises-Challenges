<?php 
    function addAll($num){
        $sum = 0;
        $array = str_split($num);
        $length = strlen($num);
        for($i = 0;$i < $length;$i++){
            $sum += $array[$i];
        }
        return $sum;
    }
    echo addAll(12345678)."\n";
?>
