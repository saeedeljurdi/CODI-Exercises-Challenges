<?php 
    function isArmstrong($num) {
        settype($num, "string");
            $array = str_split($num);
            if(strlen($num)==3) {
                $sum = ($array[0] ** 3) + ($array[1] ** 3) + ($array[2] ** 3);
                if($sum == $num) {
                    echo "${num} is armstrong\n";
                }
                else {
                    echo "${num} is not armstrong\n";
                }
            }
            else {
                echo "number has more or less than 3 digits\n";
            }
        }
        isArmstrong(153);
?>
