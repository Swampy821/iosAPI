<?php
$includeArray = array(
    'Config/authConfig.php',
    'Config/dbConfig.php',
    'Classes/MySQL.class.php',
    'Classes/command.class.php',
    'Classes/users.class.php'
);
foreach($includeArray as $inc) {
    include($inc);
}


?>
