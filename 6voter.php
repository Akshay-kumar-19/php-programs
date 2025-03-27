<!DOCTYPE html>
<html lang="en">
<head> 
    <title>voter</title>
</head>
<body>
    <form action="5voterphp.php" method="POST">
    <table border="1">
        <tr><td colspan="2" style="color: blue;">Election comission of India</td></tr>
        <tr><td>first name</td>
            <td><input type="text" name="fname" size="40"></td>
        </tr>
        <tr><td>last name</td>
            <td><input type="text" name="lname" size="40"></td>
        </tr>
        <tr><td>father name</td>
            <td><input type="text" name="father" size="40"></td>
        </tr>
        <tr><td>contact</td>
            <td><input type="text" name="contact" pattern="[0-9]{10}" size="40"></td>
        </tr>
        <tr><td>DOB</td>
            <td><input type="date" name="dob"></td>
        </tr>
        <tr><td>gender</td>
            <td><input type="radio" name="gender" value="male" checked="True">male<br>
            <input type="radio" name="gender" value="female">female</td>
        </tr>
        <tr><td>image</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" ></td>
            <td><input type="reset" name="reset" ></td>
        </tr>
    </table>
    </form>
    
</body>
</html>