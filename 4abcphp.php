<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php
        $iname=$_POST['iname'];
        $iprice=$_POST['iprice'];

        $itema=explode(",",$iname);
        $itemb=explode(",",$iprice);

        $itemcount=count($itema);
        $pricecount=count($itemb);

        if(empty($iname)||empty($iprice))
        die("please enter all the fields");

        if($itemcount!=$pricecount)
        die("number of items and price must be equal");
    
        echo "<table border=1><tr><th>item name</th><th>item price</th></tr>";

        for($i=0;$i<$itemcount;$i++)
        {
            echo "<tr><td>".$itema[$i]."</td><td>".$itemb[$i]."</td></tr>";
        }
        echo"</table>";

        $maxp=max($itemb);
        $minp=min($itemb);

        for($i=0;$i<$itemcount;$i++)
        {
        if($maxp==$itemb[$i])
        echo"<br> costliest item is: ".$itema[$i];
        
        if($minp==$itemb[$i])
        echo"<br> cheapest item is: ".$itema[$i];


        }



    
    ?>
</body>
</html>