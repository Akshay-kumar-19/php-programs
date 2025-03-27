<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>adimssion</title>
</head>
<body>
    <form action="2admissionphp.php" method="post">
        <h1>admission form</h1>
        <table border="1">
        <tr>
            <td>name</td>
            <td><input type="text" name="name" size=40></td>
        </tr>
        <tr>
            <td>father name</td>
            <td><input type="text" name="father" size=40></td>
        </tr>
        <tr>
            <td>gender</td>
            <td><select name="gender">
                <option value="male">male</option>
                <option falue="female">female</option>
            </select></td>
        </tr>
        <tr>
            <td>dob</td>
            <td><input type="date" name="dob"></td>
        </tr>
        <tr>
            <td>phone</td>
            <td><input type="text" name="phone" size=40 pattern="[0-9]{10}"></td>
        </tr>
        <tr>
            <td>coursee</td>
            <td><input type="radio" name="course" value="ba" checked="True">ba<br>
                <input type="radio" name="course" value="bba">bba<br>
                <input type="radio" name="course" value="bca">bca<br>
                <input type="radio" name="course" value="bcom">bcom<br>
                <input type="radio" name="course" value="bvoc">bvoc<br>
        </tr>
        <tr>
            <td>total %</td>
            <td><input type="text" name="total" size=40 ></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit"></td>
            <td><input type="reset" name="reset" ></td>
        </tr>
        </table>
    </form>
</body>
</html>