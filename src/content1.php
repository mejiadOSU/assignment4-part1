<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
/* session checked logged in code idea from website 
 *http://stackoverflow.com/questions/1545357/how-to-check-if-a-user-is-logged-in-in-php  user Jonathan Sampson 2009*/
    if(!isset($_SESSION['visits'])){
        $_SESSION['visits'] = 0;
        }
    if(empty($_POST['username']) && $_SESSION['visits'] == 0) {
        echo "A username must be entered." . "<br>";
    }else {
       $_SESSION['loggedin'] = true; 
    }
?>
        
<!DOCTYPE html>

<html>
    <head>
        <title>content1 php file</title>
    </head>
    <body>

    <?php
/*session code ides from class tutorials found here 
 *http://stackoverflow.com/questions/1545357/how-to-check-if-a-user-is-logged-in-in-php*/
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        
        if(session_status() == PHP_SESSION_ACTIVE){
            if(isset($_POST['username']) && $_SESSION['visits'] == 0){
                $_SESSION['name'] = $_POST['username'];
            }
        }
    
        $_SESSION['visits']++;
        
        echo "Hello " . $_SESSION['name'] . " you have visited this page " . 
        $_SESSION['visits'] . " times <br>";
        
    echo "Click" . 
    "<a href=\"http://web.engr.oregonstate.edu/~mejiad/content2.php\"> here </a>" .
    "to go to content page 2 <br>";
        

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
