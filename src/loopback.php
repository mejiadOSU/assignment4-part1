<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
        
<!DOCTYPE html>

<html>
    <head>
        <title>loopback php file</title>
    </head>
    <body>
    

    <?php
    /* This code I found on stackoverflow posted by sherilyn http://stackoverflow.com/questions/3408616/how-to-check-if-get-is-empty  */
    if( !$_GET){
        echo "{\"Type\":\"[GET]\",\"parameters\":null}";
        exit;
    }
    ?>
    
    <?php
    $i=0;
    echo "{\"Type\":\"[GET]\",";
    echo "\"parameters\":{";
    
    
    /* This foreach code was taken from the instructors videos located here http://eecs.oregonstate.edu/ecampus-video/player/player.php?id=64 */
    foreach($_GET as $key => $value){
    if ($i > 0){ echo ","; }
    
    echo "\"$key\"" . ":" . "\"";
    if ($value == "") { $value = "undefined"; }
    echo "$value" . "\"";
    
    $i+=1;
    
    }
    echo "}}";
    
    ?>
        
        
        
    </body>
</html>
