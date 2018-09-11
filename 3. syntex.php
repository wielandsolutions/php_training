<!DOCTYPE html>
<html>
<body>

<h1>My first PHP program</h1>

<?php
echo "Hello World!<br>";
echo "my first name is manjeet<br>";
ECHO "my middel name is kumar<br>";
EcHo "my last name is singh<br>";

?>
<!--only the first statement will display the value of the $color variable (this is because $color, $COLOR, and $coLOR are treated as three different variables):-->
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>
</body>
</html>