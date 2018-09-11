<!DOCTYPE <!DOCTYPE html>
<html>
<head>
Variables are "containers" for storing information.
</head>
<body>
    <?php
    /*Creating (Declaring) PHP Variables */
    $txt = "Hello world!";
    $x = 5;
    /*$x is varible hold the value 5 */
    $y = 10.5;
    /**$y is variable hold the value 10.5 */
    echo $txt;
    echo"<br>";
    echo $x;
    echo"<br>";
    echo $y;
    ?>
<br>
    <?php
    /*show how to output text and a variable:*/
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>
<br>
<?php
/*sum of two varibles*/
$x=30;
$y=90;
echo $x+$y;
?>
<!--Global and Local Scope -->
<?php
$a=10;//Globel scope
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>


</body>
</html>