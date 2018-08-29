<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$x = 5; // global scope
$y = 10;
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>