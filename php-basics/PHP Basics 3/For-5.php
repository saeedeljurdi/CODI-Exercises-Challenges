<?php 
    function reverseSet($sentence){
        $arr = explode(" " , $sentence );
        $str = array();
        for($i = count($arr)-1 ; $i >= 0 ; $i--){
        $str[] = $arr[$i];
        }
        echo implode(" " , $str);
        }
        reverseSet("I Love You");
?>
