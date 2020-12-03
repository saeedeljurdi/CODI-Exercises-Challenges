<?php 
    function change($statement){
        $statement = str_replace("PHP", "anything", $statement);
        $statement = str_replace("python", "PHP", $statement);
        $statement = str_replace("anything", "python", $statement);
        return $statement;
    }
    echo change("Hello I'm PHP, please welcome python");
?>
