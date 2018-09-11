<!doctype <!DOCTYPE html>
<html>
<head>
Data Types:
PHP supports the following data types:<br>

String<br>
Integer<br>
Float (floating point numbers - also called double)<br>
Boolean<br>
Array<br>
Object<br>
NULL<br>
Resource<br>

</head>
<body>
<br><br>
    <?php
    echo "PHP String<br>";
    $name="Manjeet kumar<br>";
    $surname="Singh";
    echo $name;
    echo "br";
    echo $surname;
?>
<br><br>
<?php
echo "PHP Integrs<br>";
$w=2345;
var_dump($w);
?>
<br><br>
<?php
echo"php float<br><br>";
$g=123.60;
var_dump($g);
?>
<br>
<?php
$name=true;
$surname=false;
echo $name;
echo"br";
echo $surname;
?>
<br><br>
<?php
$bus=array("Volvo","BMW","Toyta");
var_dump($bus);
?>
<br><br>
<?php
echo "NULL value<br>";
$manjeet="hello manjeet singh";
$manjeet=null;
var_dump("$manjeet");
?>
    </body>
</html>