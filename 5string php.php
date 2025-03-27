<?php
if(isset($_POST['submit'])) {

    $string = $_POST['string'];
    $delimeter = $_POST['delimeter'];
    
    $reverse = strrev($string);
    $upper = strtoupper($string);
    $lower = strtolower($string);
    $trims=str_repeat($string,3);
    echo"$trims";

    echo "<h3>Result</h3>";
    echo "<p>Original String: $string</p>";
    echo "<p>Reversed String: $reverse</p>";
    echo "<p>Upper Case: $upper</p>";
    echo "<p>Lower Case: $lower</p>";


$explode = explode($delimeter, $string);
    echo "<p>exploded string</p>";
    echo "<ul>";
    foreach($explode as $i) {
        echo "<li> $i  </li>";
    }
    echo "</ul>";
}
?>
