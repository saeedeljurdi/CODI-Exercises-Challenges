<?php 
    function z(){
        echo "*******";
        echo PHP_EOL;
        for($i = 2 ; $i < 7 ; $i++){
            for($j = 1 ; $j < $i ; $j++){
                echo " ";
            }
            echo "*";
            echo PHP_EOL;
        }
        echo "*******";
    }
    z()
?>
