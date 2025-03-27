<?php
$con=new mysqli("localhost","root","akki","feedback");
if($con->connect_error)
    die($con->connect_error);

$message="";

$sql="create table if not exists feedback (id int auto_increment primary key,name varchar(10),email varchar(20),class varchar(10),message varchar(30))";
$con->query($sql);
if($con->query($sql)===TRUE)
    echo"table created";
else
    echo $con->error;

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $class=$_POST['class'];
    $message=$_POST['message'];

    if(!empty($name)&&!empty($email)&&!empty($class)&&!empty($message)&&filter_var($email, FILTER_VALIDATE_EMAIL))
    {
    $sql="insert into feedback (name,email,class,message) values('$name','$email','$class','$message')";
    if($con->query($sql)===TRUE)
        $message="thanks for feedback";
    else
        $message="error".$con->error;

    }
    else
        $message="please fill all the column";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="POST">
        <h2>feedback form</h2>
        <table border="1">
            <tr>
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>class</td>
                <td><input type="text" name="class"></td>
            </tr>
            <tr>
                <td>message</td>
                <td><textarea name="message" rows="3"></textarea></td>
            </tr>
            <tr>
               <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
    <br><br>
    <span><?php echo "$message";?></span>
    
</body>
</html>