<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
        
<!DOCTYPE html>

<html>
    <head>
        <title>Hello</title>
    </head>
    <body>
    
    <?php
    $minAnd = $_GET['min-multiplicand'];
    $maxAnd = $_GET['max-multiplicand'];
    $minMul = $_GET['min-multiplier'];
    $maxMul = $_GET['max-multiplier'];
    $count = 0;
    
    echo "<p>";
    
    if(!isset($_GET['min-multiplicand'])){
        $count += 1;
        echo "Missing parameter min-multiplicand. <br />";
    }else if (is_numeric($minAnd)){}
        else{
            $count += 1;
            echo "$minAnd" . " must be be integer. <br />";
        }
            
    if(!isset($_GET['max-multiplicand'])){
        $count += 1;
        echo "Missing parameter max-multiplicand. <br />";
    }else if (is_numeric($maxAnd)){}
        else{
            $count += 1;
            echo "$maxAnd" . " must be be integer. <br />";
        }

    if(!isset($_GET['min-multiplier'])){
        $count += 1;
        echo "Missing parameter min-multiplier. <br />";
    }else if (is_numeric($minMul)){}
        else{
            $count += 1;
            echo "$minMul" . " must be be integer. <br />";
        }

    if(!isset($_GET['max-multiplier'])){
        $count += 1;
        echo "Missing parameter max-multiplier. <br />";
    }else if (is_numeric($maxMul)){}
        else{
            $count += 1;
            echo "$maxMul" . " must be be integer. <br />";
        }
    
    if (is_numeric($minMul) && is_numeric($maxMul) && $minMul >= $maxMul ){
        $count += 1;
        echo "Minimum multiplier <span>"; 
        echo "$minMul" . "</span> larger than maximum multiplier. <br />";
    }
    
    if (is_numeric($minAnd) && is_numeric($maxAnd) && $minAnd >= $maxAnd ){
        $count += 1;
        echo "Minimum multiplicand <span>"; 
        echo "$minAnd" . "</span> larger than maximum multiplicand. <br />";
    }
    echo "</p>";
    
    ?>
    
    <?php
    
    if ($count == 0){
    $tall = ( $maxAnd - $minAnd ) + 2; 
    $wide = ( $maxMul - $minMul ) + 2;
    
    echo '<table border = "1";>
    <tr><td>';
    for ( $j = 0; $j < $wide-1; $j++){
        echo '<td>' . ($minMul + $j);
    }
    
    echo '<tr>';
    
    for ( $i = 0; $i < $tall-1; $i++){
   
        for ( $k = 1; $k < $wide+1; $k++){
            echo '<td>' . ( ($minMul + $i) * $k);
        }
    echo '<tr>';    
    }
    
    echo '<table>';
    
    }
    ?>
        
        
        
    </body>
</html>
