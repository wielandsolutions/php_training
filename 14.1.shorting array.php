<!doctype <!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <?php
        //Sort Array in Ascending Order - sort()
        $city=array("chennai","bangalore","delhi");
        sort($city);
        $clength = count($city);
        for($x = 0; $x < $clength; $x++) {
        echo $city[$x];
        echo "<br>";
        }
    
    ?>
    <br>
    <?php
    $number= array(1,2,3,4,5,6);
    sort($number);

    $arrlength = count($number);
    for($x= 0; $x < $arrlength; $x++){
        echo $number[$x];
        echo "<br>";
    }
    ?>
</body>
</html>