<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $father=$_POST['father'];
        $contact=$_POST['contact'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $image=$_POST['image'];

        $today=date('y-m-d');
        $age=date_diff(date_create($today),date_create($dob))->y;

        if(empty($fname)||empty($lname)||empty($father)||empty($contact)||empty($dob)||empty($gender)||empty($image))
        {
            die("please fill all the fields");
        }
        if($age<18)
        {
            die("not eligible to apply");
        }

        if($age>18)
        {
            echo "<table border='1'>
                    <tr><th colspan='2'>election comission of India</th>
                    <tr><td colspan='2' align='center'><img src='$image' alt='your image'></td></tr>
                    <tr><td>name:</td><td>$fname $lname</td></tr>
                    <tr><td>father name: </td><td>$father</td></tr>
                    <tr><td>contact: </td><td>$contact</td></tr>
                    <tr><td>dob:</td><td> $dob</td></tr>
                    <tr><td>gender: </td><td>$gender</td></tr>
                    </table>";
                    
                
        }
    ?>
    
</body>
</html>