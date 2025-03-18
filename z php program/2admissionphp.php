<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    $name=$_POST['name'];
    $father=$_POST['father'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $course=$_POST['course'];
    $total=$_POST['total'];
    

    if(empty($name))
        die("Error: please enter name");
    if(empty($father))
        die("Error: please enter father name ");
    if(empty($gender))
        die("Error: please select gender");
    if(empty($dob))
        die("Error: please select date of birth");
    if(empty($phone))
        die("Error: please enter phone number");

    if(empty($course))
        die("Error: please select course");
    if(empty($total))
        die("Error: please enter total marks");

    if($total<90&&$course=='bca')
        die("not elegible to apply");
    if($total<80&&$course=='bba')
        die("not elegible to apply");
    if($total<70&&$course=='ba')
        die("not elegible to apply");
    
    if($total<60&&$course=='bcom')
        die("not elegible to apply");
   
    if($total<50&&$course=='bvoc')
        die("not elegible to apply");

    
        echo "<h1>Welcome</h1>";
        echo "name:".$name;
        echo "<br>father name:".$gender;
        echo "<br>date of birth:".$dob;
        echo "<br>phone:".$phone;
        echo "<br>course:".$course;
        echo "<br>percentage:".$total;


    ?>
</body>
</html>