<!doctype <!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <?php
        //loop through an indexed Arrays
        $name=array("manjeet","pushpraj","ram","hanumaan");
        $arrlength=count($name);
        for($x = 0; $x < $arrlength; $x++){
        echo "$name[$x]";
        echo "<br>";
        }



    ?>
    <?php
    //Assocative Arrays
    $age['manjeet']="24";
    $age['bhaskr']="25";
    $age['pushpraj']="24";
    echo "manjeet is".$age['manjeet']."year old";
    ?>
</body>
</html>