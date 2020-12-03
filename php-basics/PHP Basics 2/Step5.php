<?php 
    function wordToDigit($string)
    {
        switch ($string) {
        case "zero": return 0; break;
        case "one": return 1; break;
        case "two": return 2; break;
        case "three": return 3; break;
        case "four": return 4; break;
        case "five": return 5; break;
        default:
            return  "no";
    }
}
echo wordToDigit("five")."\n";
?>
