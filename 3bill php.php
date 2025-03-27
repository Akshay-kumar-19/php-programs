<?php

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$code=$_POST['code'];
$price=$_POST['price'];
$qty=$_POST['qty'];

if(empty($price)||empty($qty))
    die("enter all the fields");

$total=$price*$qty;
echo "<h1> billing summary</h1>";
echo "<table border=1>";
echo "<tr><th>name</th><th>code</th><th>price</th><th>qty</th><th>total</th></tr>";
echo "<tr><td>$name</td><td>$code</td><td>$price</td><td>$qty</td><td>$total</td>";

}
?>