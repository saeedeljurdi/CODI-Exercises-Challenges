<?php 
    function swap($var1, $var2) {
        $temp = $var1;
        $var1 = $var2;
        $var2 = $temp;
        echo "var1 is ${var1} & var2 is ${var2}\n";
    }
    swap(1, 2);
?>
