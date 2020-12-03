<?php 
    function check_palindrome($string) { 
        function pushMe($string) { 
            $string = str_replace(' ', '', $string);
            return $string;
        }
        if(pushMe($string) == pushMe(strrev($string))) {
            return "It's a palindrome";
        }
        else {
            return "no";
            }
        }
        
        echo check_palindrome("nurses run");
?>
