<?php
$con=new mysqli("localhost","root","akki","test");
if($con->connect_error)
    die("error".$con->connect_error);

$sql="create table if not exists product (id int(10),name varchar(10), price int(10), qty int(10))";
$con->query($sql);
if($con->query($sql)===TRUE)
    echo "table created";
else
    echo "failed to create";

if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];

    $sql="insert into product (id,name,price,qty) values ('$id','$name','$price','$qty')";
    if($con->query($sql)===TRUE)
        echo "values inserted";
    else
        echo "failed to insert";
}

if(isset($_POST['view']))
{
    $sql="select * from product";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
        echo "<table border='1'><tr><th>id</th><th>name</th><th>price</th><th>qty</th></tr>";
        while($row=$result->fetch_assoc())
        {
            echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['price']}</td><td>".$row['qty'];
        }
            echo "</table>";
    }
    else
    echo "resnould not ";
}




?>