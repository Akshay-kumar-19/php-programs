<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name=$_POST['name'];
        $adress=$_POST['adress'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $profession=$_POST['profession'];
        $resid=$_POST['resid'];

        if(empty($adress))
        die("Enter your name");
        if(empty($age))
        die("Enter your age");
        if(empty($gender))
        die("Enter your gender");
        if(empty($profession))
        die("Enter your profession");
        if(empty($resid))
        die("Enter your resid");
    if($resid=='non')
        die("only resident is allowd");

        else{
            echo ('<br>name:'.$name);
            echo '<br>adress:'.$adress;
            echo '<br>age:'.$age;
            echo '<br>gender:'.$gender;
            echo '<br>profession:'.$profession;
            echo '<br>resid:'.$resid;
        }
       
        ?>
    
</body>
</html>