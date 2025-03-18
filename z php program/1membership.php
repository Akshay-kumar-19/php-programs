<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membership form</title>
</head>
<body>
    <form action="1membershipphp.php" method="POST">
        <h1>membership registration</h1>
        name
       <br> <input type="text" name="name" required size="40"><br>
        adress
        <br><textarea name="adress" required rows="5"cols="40" id=""></textarea><br>
        age
        <br><input type="text" name="age" required ><br>
        <br><input type="radio" name="gender" value="male" checked="True">Male<br>
        <input type="radio" name="gender" value="female" >Female<br>
        profession
       <br> <input type="text" name="profession" required size="40"><br>
       residental_status
        <br><input type="radio" name="resid" value="resident" checked="True">resident<br>
        <input type="radio" name="resid" value="non">non resident<br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>