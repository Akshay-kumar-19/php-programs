<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        class emp 
        {
            public $name;
            public function __construct($name) 
            {
                $this->name = $name;
            }
        }

        class full extends emp {
            public $salary = 1000;
            public $da, $hra, $pf, $gross, $net;

            public function compute() {
                $this->da = $this->salary * 0.2;
                $this->hra = $this->salary * 0.5;
                $this->pf = $this->salary * 0.7;
                $this->gross = $this->salary + $this->da + $this->hra;
                $this->net = $this->gross - $this->pf;
            }

            public function display() {
                echo "<table border=1";
                echo"<tr><td colspan=2>full time</td></tr>";
                echo"<tr><td>empname</td><td>$this->name</td></tr>";
                echo "<tr><td>Basic Salary</td><td>$this->salary</td></tr>";
                echo "<tr><td>DA</td><td>$this->da</td></tr>";
                echo "<tr><td>HRA</td><td>$this->hra</td></tr>";
                echo "<tr><td>PF</td><td>$this->pf</td></tr>";
                echo "<tr><td>Gross Salary</td><td>$this->gross</td></tr>";
                echo "<tr><td>Net Salary</td><td>$this->net</td></tr>";
                echo "</table>";
            }
            
        }

        class part extends emp {
            public $salary = 1000;
            public $gross, $net;
            public $hours = 1;

            public function compute() {
                $this->gross = $this->salary + $this->hours * 6;
                $this->net = $this->gross - 500;
            }

            public function display() {
                echo "<table border=1";
                echo"<tr><td colspan=2>full time</td></tr>";
                echo"<tr><td>empname</td><td>$this->name</td></tr>";
                echo "<tr><td>Basic Salary</td><td>$this->salary</td></tr>";
                echo "<tr><td>Gross Pay</td><td>$this->gross</td></tr>";
                echo "<tr><td>Net Pay</td><td>$this->net</td></tr>";
                echo "</table>";
            }
            
        }

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $job = $_POST['job'];

            if ($job == 'full') {
                $emp = new full($name);
                $emp->compute();
                $emp->display();
            } else {
                $emp = new part($name);
                $emp->compute();
                $emp->display();
            }

            
        }
    ?>
</body>
</html>
