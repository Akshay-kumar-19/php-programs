<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php

class input extends Exception {
    public function error() {
        return "error in line".$this->getLine()."in file".$this->getFile()."<b> " . $this->getMessage()."</b>";
    }
}

class logical extends Exception {
    public function error() {
        return "error in line".$this->getLine()."in file".$this->getFile()."<b> " . $this->getMessage()."</b>";
    }
}

class email extends Exception {
    public function error() {
        return "error in line".$this->getLine()."in file".$this->getFile()."<b> " . $this->getMessage()."</b>";
    }
}

if (isset($_POST['submit'])) {
    $event = $_POST['event'];
    $coordinator = $_POST['coordinator'];
    $email = $_POST['email'];
    $budget = $_POST['budget'];
    $expense = $_POST['expense'];

    try {
        if (empty($event) || empty($coordinator) || empty($email) || empty($budget) || empty($expense)) {
            throw new input("Please provide all inputs.");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new email("Please provide a valid email.");
        }
        if ($expense > $budget) {
            throw new logical("Expense cannot exceed the allocated budget.");
        }

        echo "<b>Your budget is sanctioned. Please collect the cheque from the office.</b>";
    } catch (input | email | logical $e) {
        echo $e->error();
    }
}
?>

</body>
</html>
