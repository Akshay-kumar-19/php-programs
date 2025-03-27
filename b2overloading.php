<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form action="b2overload.php" method="POST">
        <table border="1">
            <tr>
                <td>name</td><td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>amt</td><td><input type="text" name="amt"/></td>
            </tr>
            <tr>
                <td>dur</td><td><input type="text" name="dur"/></td>
            </tr>
            <tr>
                <td>bank</td><td><input type="radio" name="bank" value="sbi">sbi
                <input type="radio" name="bank" value="cbi">cbi</td>
            </tr><tr>
                <td colspan="2"><input type="submit" name="submit" value="submit"/></td>
            </tr>
        </table>
    </form>
    
</body>
</html>