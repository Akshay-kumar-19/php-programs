<?php
$con=new mysqli("localhost","root","akki","hotel");
if($con->connect_error)
    die($con->connect_error);

    /* ------creation of tables and inserting of item into customer table can be done directly in xampp also------

   $sql="create table if not exists customer (name varchar(20),adress varchar(20),contact varchar(20),aadhar varchar(20),gender varchar(20),checkin date,checkout date,type varchar(20),rooms varchar(20))";
    $con->query($sql);
    if($con->query($sql)===TRUE)
        echo "cusomer table created";
    else
        echo $con->error;

    $sql="create table if not exists room(type varchar(20),rent varchar(20),count varchar(20))";
    $con->query($sql);
    if($con->query($sql))
        echo "room table created";
    else
        echo $con->error;

    $sql="insert into room (type,rent,count) values('single','1000','10'),('double','2000','10'),('delux','3000','10')";
    if($con->query($sql)===TRUE)
        echo "inserted into rooms";
    else
        $con->error;
    -------------------------------------------------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <form method="POST">
        <table border="1">
            <tr>
                <td colspan="2">akkis hotel</td>
            </tr>
            <tr>
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>adress</td>
                <td><textarea name="adress"></textarea></td>
            </tr>
            <tr>
                <td>contact</td>
                <td><input type="text" name="contact"></td>
            </tr>
            <tr>
                <td>aadhar</td>
                <td><input type="text" name="aadhar"></td>
            </tr>
            <tr>
                <td>gender</td>
                <td><input type="radio" name="gender" value="male" checked="TRUE">male
                <input type="radio" name="gender" value="female">female</td>
            </tr>
            <tr>
                <td>checkin</td>
                <td><input type="date" name="checkin"></td>
            </tr>
            <tr>
                <td>checkout</td>
                <td><input type="date" name="checkout"></td>
            </tr>
            <tr>
                <td>room type</td>
                <td><select name="type">
                    <option value="single">single</option>
                    <option value="double">double</option>
                    <option value="delux">delux</option>
                </select></td>
            </tr>
            <tr>
                <td>no of rooms</td>
                <td><input type="text" name="rooms"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
                <td><input type="reset" name="reset"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $adress=$_POST['adress'];
    $contact=$_POST['contact'];
    $aadhar=$_POST['aadhar'];
    $gender=$_POST['gender'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $type=$_POST['type'];
    $rooms=$_POST['rooms'];

    $days=(strtotime($checkout)-strtotime($checkin))/(60*60*24);

    $sql="select rent,count from room where type='$type'";
    $result=$con->query($sql);
    $row=$result->fetch_assoc();

    if($row['count']<$rooms)
        die("not enough rooms avilable");

    if($checkin>=$checkout||$checkin<date('Y-m-d'))
        die("invalid dates");

    $amount=$row['rent']*$days*$rooms;

    $sql="insert into customer (name,adress,contact,aadhar,gender,checkin,checkout,type,rooms) values ('$name','$adress','$contact','$aadhar','$gender','$checkin','$checkout','$type','$rooms')";
    $con->query($sql);

    $abc="update room set count=count-'$rooms' where type='$type'";
    $con->query($abc);

    echo "room boked for $days days. <br> please pay amount Rs $amount";

}

?>