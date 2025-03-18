<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <form method="POST" action="3bill php.php">
    <table border="1">
        <tr>
            <td colspan="2" align="center"><b>ABC bank</b></td>
        </tr>
        <tr>
            <td>select product name</td>
            <td><select name="name">
                <option value="rice">rice</option>
                <option value="wheat">wheat</option>
                <option value="milk">milk</option>
                <option value="bread">bread</option>
            </select></td>
        </tr>
        <tr>
            <td>select product code</td>
            <td><select name="code">
                <option value="ri">ri</option>
                <option value="wh">wh</option>
                <option value="mi">mi</option>
                <option value="br">br</option>
            </select></td>
        </tr>
        <tr>
            <td>Enter price</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Enter qty</td>
            <td><input type="text" name="qty"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit"></td>
            <td><input type="reset" name="reset"></td>
        </tr>
    </table>
    </form>
</body>
</html>
