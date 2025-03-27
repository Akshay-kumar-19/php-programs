<!DOCTYPE html>
<html lang="en">
<head> 
    <style>
        td{
            padding: 5px;
            background-color: lightgrey;
        }
    </style>  
</head>
<body>
    <form action="6marks php.php" method="POST">
        <table border="1">
        <tr>
                <td colspan="2" align="center">st aloysius college</td>
                
            </tr>
            <tr>
                <td>name</td>
                <td><input type="text" name="name">
            </tr>
            <tr>
                <td>regno</td>
                <td><input type="text" name="regno">
            </tr>
            <tr>
                <td>semester</td>
                <td align="center">
                    <select name="sem">
                        <option value="I">I sem</option>
                        <option value="II">III sem</option>
                        <option value="III">II sem</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>course</td>
                <td align="center">
                    <select name="course">
                        <option value="bca">bca</option>
                        <option value="ba">bba</option>
                        <option value="ba">ba</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>subject 1</td>
                <td><input type="number" name="sub1">
            </tr>
            <tr>
                <td>subject 2</td>
                <td><input type="number" name="sub2">
            </tr>
            <tr>
                <td>subject 3</td>
                <td><input type="number" name="sub3">
            </tr>
            <tr>
                <td>subject 4</td>
                <td><input type="number" name="sub4">
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
                <td><input type="reset" name="reset"></td>
            </tr>
            
        </table>
    </form>
    
</body>
</html>