<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
    $con=new mysqli("localhost","root","akki","pass");
    if($con->connect_error)
    {
        die( "error".$con->connect_error);
    }

    $sql="create table if not exists passport(id int(10), name varchar(10), adress varchar(10),father varchar(10),dob date,gender varchar(10),img varchar(100))";
        $con->query($sql);
        if($con->query($sql)===TRUE)
        {
            echo " table inserte<br>";
        }
        else
        {
            echo "error".$con->error;
        }
    
        ?>
        <form method="POST" action ="b6pass1.php">
            <table border="1">
                <tr><td>id</td><td><input type="text" name="id" ></td></tr>
                <tr><td>name</td><td><input type="text" name="name" ></td></tr>
                <tr><td>adress</td><td><input type="text" name="adress" ></td></tr>
                <tr><td>father</td><td><input type="text" name="father" ></td></tr>
                <tr><td>dob</td><td><input type="date" name="dob" ></td></tr>
                <tr><td>gender</td><td><input type="radio" name="gender" value="male" >male
                <input type="radio" name="gender" value="female" >female</td></tr>
                <tr><td>img</td><td><input type="file" name="img" ></td></tr>
                <tr><td><input type="submit" name="submit" value="submit" ></td></tr>
            </table>
        </form>
        <?php
    
        if(isset($_POST['submit']))
        { 
        $id = $_POST['id'];
        $name = $_POST['name'];
        $adress = $_POST['adress'];
        $father = $_POST['father'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $img=$_POST['img'];

        $sql = "INSERT INTO passport VALUES ('$id', '$name', '$adress', '$father', '$dob', '$gender', '$img')";

        if ($con->query($sql) === TRUE) 
        {
            echo "<h3>Successfully entered passport</h3>";
           
        } else {
            echo "Error: " . $con->error;
        }
       
    }
    

    ?>
     <b><a href="b6passport.php">Go Home</a></b>
</body>
</html>