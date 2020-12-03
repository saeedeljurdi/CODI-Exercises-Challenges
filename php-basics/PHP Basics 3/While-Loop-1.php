<?php 
function triangle($line)
    {$i = 1;
    while($i <= $line){
        $j = 1;
        while($j <= $i ){
        echo "*";
        $j++ ;
    }
        $i++;
        echo "\n";
    }
    }
    triangle(8);
