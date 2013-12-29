<?php
        include("Config/includes.config.php");
        if(auth::authorized($_GET)) {
            echo  command::process($_GET);
        }else{
            echo "YOU ARE NOT AUTHORIZED TO USE THIS API";
       }
?>