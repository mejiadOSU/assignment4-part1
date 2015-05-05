<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
        
<!DOCTYPE html>

<html>
    <head>
        <title>loopback php file</title>
    </head>
    <body>
    

   <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) {
        echo "You made it to content page 2<br>";
        
    echo "Click" . 
    "<a href=\"http://web.engr.oregonstate.edu/~mejiad/content1.php\"> here </a>" .
    "to return to content page 1 <br><br>";
        
    echo "<form id=\"logout\" action=\"login.php\" method=\"get\">";
    echo"<input type=\"radio\" name=\"end\" checked>";
    echo "<button type=\"submit\">Logout</button";
    }else {echo "Please log in first to see this page.";
    }
    
    ?>
        
    <?php
    echo "<br><footer><p>";
    echo "Click" . 
    "<a href=\"http://web.engr.oregonstate.edu/~mejiad/login.php\"> here </a>" .
    "to return to login screen <br>";
    echo "</P></footer>";
    ?>
    

        
        
        
    </body>
</html>
