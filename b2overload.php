<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
    class investment
    {
        public $amt,$dur;
        public function __construct($amt,$dur)
        {
            $this->amt=$amt;
            $this->dur=$dur;
        }
        public function maturity()
        {
            echo "this is maturity call";
        }
      
    }
    class sbi extends investment{
        public $ma;
        public function maturity()
        {
            $this->ma=$this->amt + ($this->amt * $this->dur * 6.5) / 100;
            echo "maturity amout is: $this->ma";
        }
    }

    class cbi extends investment
    {
        public $ma;
        public function maturity()
        {
            $this->ma=$this->amt + ($this->amt * $this->dur * 5.6) / 100;
            echo "maturity amount is: $this->ma";
        }
    }

    if(isset($_POST['submit']))
    {
        
        $amt=$_POST['amt'];
        $dur=$_POST['dur'];
        $bank=$_POST['bank'];

        if(empty($amt)||empty($dur)){
            die( "Please fill all the fields");
        }

       

        if($bank=='sbi')
        {
            $emp=new sbi($amt,$dur);
            $emp->maturity();
        }else{
            $emp=new cbi($amt,$dur);
            $emp->maturity();
        }
    }

    
?>
</body>
</html>