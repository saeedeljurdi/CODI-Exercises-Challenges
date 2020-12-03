<?php 
    $birth_year = 2002;
    settype($birth_year, "integer");
    $current_year = 2020;
    settype($current_year, "integer");
    $diff = $current_year - $birth_year;
    if($diff > 18) { echo "You can drive\n"; }
    else { echo "You still a kid, go and play GTA\n"; }
?>
