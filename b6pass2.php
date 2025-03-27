<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
     $con=new mysqli("localhost","root","akki","pass");
     if($con->connect_error)
     {
         die("error".$con->connect_error);
     }
   
        ?>

        <form action="b6pass2.php" method="POST">
            Enter your passport number
            <input type="text" name="id">
            <input type="submit" name="view">

        </form>
        <?php
        if (isset($_POST['view']) && isset($_POST['id'])) {
        $id=$_POST['id'];
        $sql="select * from passport where id='$id'";
        $result=$con->query($sql);

       

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h3>Passport Details</h3>";
        echo "<table border='1'>";
        echo "<tr><td>ID</td><td>{$row['id']}</td></tr>";
        echo "<tr><td>Name</td><td>{$row['name']}</td></tr>";
        echo "<tr><td>Address</td><td>{$row['adress']}</td></tr>";
        echo "<tr><td>Father</td><td>{$row['father']}</td></tr>";
        echo "<tr><td>DOB</td><td>{$row['dob']}</td></tr>";
        echo "<tr><td>Gender</td><td>{$row['gender']}</td></tr>";
        echo "<tr><td>Image</td><td><img src='{$row['img']}'></td></tr>";
        echo "</table>";
    } else {
        echo "<h3>No passport found with ID: '$id'</h3>";
    }
}
    ?>
    <b><a href="b6passport.php">Go Home</a></b>
</body>
</html>