<?php
// Database connection
$conn = new mysqli("localhost", "root", "akki", "feedback_db");
if ($conn->connect_error) die("Connection failed");

// Initialize message variable
$successMessage = "";

// Handle form submission
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Simple validation
    if (!empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($subject) && !empty($message)) {
        $sql = "INSERT INTO feedback (name, email, subject, message) 
                VALUES ('$name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            $successMessage = "Thank you for your feedback!";
        } else {
            $successMessage = "Error: " . $conn->error;
        }
    } else {
        $successMessage = "Please fill all fields correctly.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head><title>Feedback Form</title></head>
<body>
    <h2>Feedback Form</h2>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        Subject: <input type="text" name="subject"><br><br>
        Message: <textarea name="message"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <br><br>
    <span><?php echo $successMessage; ?></span>
</body>
</html>
