<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
    if(isset($_GET['end']) && $_GET['end'] == 'on') {
        $_SESSION = array();
        session_destroy();
        echo "Your logged out <br>";
        }

?>
        
<!DOCTYPE html>

<html>
    <head>
        <title>login php file</title>
    </head>
    <body>
    

    <?php

    echo "<form id=\"myform\" action=\"content1.php\" method=\"post\">";
    echo "User Name: <input type=\"text\" name=\"username\"><br>";
    echo "<input type=\"submit\">";

    ?>
        
    </body>
</html>
