<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Management</title>
</head>
<body>

<?php
// Database Connection
$con = new mysqli("localhost", "root", "akki", "item");

// Check Connection
if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

// Create Table if not exists
$sql = "CREATE TABLE IF NOT EXISTS product (name VARCHAR(20),id VARCHAR(20) , price VARCHAR(20),qty VARCHAR(20))";
$con->query($sql);
if ($con->query($sql) === TRUE) {
    echo "table created<br>";
} else {
    echo "Error: " . $con->error;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $sql = "INSERT INTO product VALUES ('$name', '$id', '$price', '$qty')";
    
    if ($con->query($sql) === TRUE) {
        echo "Data Inserted";
    } else {
        echo "Error: " . $con->error;
    }
}


if (isset($_POST['view'])) {
    $sql = "SELECT * FROM product";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border=1><tr><th>Name</th><th>ID</th><th>Price</th><th>Quantity</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['id'] . "</td><td>" . $row['price'] . "</td><td>" . $row['qty'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No Data Found";
    }
}

$con->close();
?>
</body>
</html>
