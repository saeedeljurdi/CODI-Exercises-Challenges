<?php 
 function triangle($line) {
        for($i=1; $i <= $line; $i++){
            for($j=1;$j <= $i; $j++ ){
            echo "*";
            }
            echo "\n";
            }
            for($k=$line; $k >=1 ; $k--){
                for($l=$k;$l >= 1; $l--){
                echo "*";
                }
                echo"\n";
                }
                }
                triangle(5);
?>
