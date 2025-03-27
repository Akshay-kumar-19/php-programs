<?php

class reportcard
{

   public $name,$regno,$course,$sem,$sub2,$sub1,$sub3,$sub4,$total,$percentage,$grade;

   public function __construct($name,$regno)
   {
    $this->name=$name;
    $this->regno=$regno;
   }

   function readdata()
   {
    $this->course=$_POST['course'];
    $this->sem=$_POST['sem'];
    $this->sub1=$_POST['sub1'];
    $this->sub2=$_POST['sub2'];
    $this->sub3=$_POST['sub3'];
    $this->sub4=$_POST['sub4'];

    if(empty($this->course)||empty($this->sem)||empty($this->sub1)||empty($this->sub2)||empty($this->sub3)||empty($this->sub4))
        die("please enter all the fields");
   }

   function calculate()
   {
        $this->total=$this->sub1+$this->sub2+$this->sub3+$this->sub4;
        $this->percentage=($this->total/400)*100;

        if($this->sub1<35||$this->sub2<35||$this->sub3<35||$this->sub4<35)
            $this->grade="fail";
        elseif($this->percentage>=80)
            $this->grade="distinction";
        elseif($this->percentage>=70)
            $this->grade="first";
        elseif($this->percentage>=60)
            $this->grade="second";
        else
            $this->grade="pass";

   }
   function display()
   {
    $color = "green"; 
    if ($this->grade == "fail") 
        $color = "red";
    echo "<h2>student result</h2>";
    echo "<table border='1'>
            <tr><td>name</td><td>$this->name</td></tr>
            <tr><td>regno</td><td>$this->regno</td></tr>
            <tr><td>course</td><td>$this->course</td></tr>
            <tr><td>semester</td><td>$this->sem</td></tr>
            <tr><td>sub1</td><td>$this->sub1</td></tr>
            <tr><td>sub2</td><td>$this->sub2</td></tr>
            <tr><td>sub3</td><td>$this->sub3</td></tr>
            <tr><td>sub4</td><td>$this->sub4</td></tr>
            <tr><td>total</td><td>$this->total</td></tr>
            <tr><td>percengate</td><td>$this->percentage</td></tr>
            <tr><td>Grade</td><td style='color: $color;'>$this->grade</td></tr>
            </table>";
   }
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $regno=$_POST['regno'];
    $student=new reportcard($name,$regno);
    $student->readdata();
    $student->calculate();
    $student->display();
}



?>