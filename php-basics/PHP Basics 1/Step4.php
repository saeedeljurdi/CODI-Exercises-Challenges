<?php
$name = "Saeed";
$position = "Project Manager";
$github_url = "https://github.com/saeedeljurdi";
echo "Hello, I'm ".$name.", I'm a ".$position." Please check my github link ".$github_url."\n";
echo "Hello, I'm ${name}, I'm a ${position} please check my github link ${github_url}\n";
echo 'Hello, I\'m '. $name .', I\'m a ' .$position. ' please check my github link ' .$github_url;
?>
<?php echo "\n"?>Hello, I'm <?php echo $name?>, I'm a <?php echo $position?> Please check my github link <?php echo $github_url?>
