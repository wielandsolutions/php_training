
<!--operators Additions1-->
1.Question Addition<br>
Answear:-
<?php
$x = 40;  
$y = 80;

echo $x + $y;
?>  <br><br>


<!--operators Subtraction2-->
2.Question Subtraction<br>
Answear:-
<?php
$x = 10;  
$y = 6;

echo $x - $y;
?>  <br><br>

<!--operators Mulliplications3-->
3.Question Multiplications<br>
Answear:-
<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  <br><br>

<!--operators Division4-->
4.Question Division<br>
Answear:-
<?php
$x = 40;  
$y = 6;

echo $x / $y;
?>  <br><br>

<!--operators Modulus5-->
5.Question Modulus<br>
Answear:-
<?php
$x = 100;  
$y = 34;
echo $x % $y;
?>  <br><br>


<!--Assignment Operators-->
<!DOCTYPE html>
<html>
<body>
<h2>**Assignment Operators**</h3><br>
1.The left operand gets set to the value of the expression on the right<br>
Answear:-
<?php
$x = 10;  
echo $x;
?>  
</body>
</html>
<br><br>

<!--Addition2-->
2.Question Addition<br>
Answear:-
<?php
$x = 20;  
$x += 100;

echo $x;
?>  <br><br>


<!--Subtraction3-->
3.Question Subtraction<br>
Answear:-
<?php
$x = 80;
$x -= 20;

echo $x;
?>  <br><br>

<!--Multiplication4-->
4.Question Multiplication<br>
Answear:-
<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>   <br><br>

<!--Division5-->
5.Question Division<br>
Answear:-
<?php
$x = 50;
$y /=10;
echo $x / $y;
?><br><br>

<!--Modulus6-->
6.Question Modulus<br>
Answear:-
<?php
$x = 40;
$x %= 3;

echo $x;
?>  <br><br>

<!--Comparison Operators-->
<!DOCTYPE html>
<html>
<body>
<h2>***Comparison Operators***</h2><br>
1.Equal<br>
Answear:-
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>  

</body>
</html><br><br>

<!--Identical Operators2-->
2.Identical<br>
Answear:
<?php
$x = 200;
$y = "100";
var_dump($x === $y); //return fales because values are not equal
?><br><br>

<!--Not equal Operators3-->
3.Not equal != <br>
Answear:
<?php
$x = 100;
$y != "100";
var_dump($x != $y); // return false because value are equal
?><br><br>

<!--Not equal Operators4-->
3.Not equal < > <br>
Answear:
<?php
$x = 100;
$y = "100";
var_dump($x <> $y); //return false because value are equal
?><br><br>

<!--Not identica5-->
3.Not identica !== <br>
Answear:
<?php
$x = 100;
$y = "100";
var_dump($x !== $y); // return true because value are not equal
?><br><br>

<!--Greater tahn6-->
6.Greater tahn > <br>
Answear:
<?php
$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y
?> <br><br>

<!--Less tahn7-->
7.Less tahn < <br>
Answear:
<?php
$x = 200;
$y = 100;
var_dump($x < $y); //returns true because $x is greater than $y
?><br><br>
<!--Greater than or equal to8-->
8.Greater than or equal to > = <br>
Answear:
<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?><br><br>

<!--Less than or equal to8-->
9.Less than or equal to < = <br>
Answear:
<?php
$x = 50;
$y = "50";
var_dump($x <= $y); // returns true because $x is greater than or equal to $y
?><br><br>


<!--Logical Operators-->
<!DOCTYPE html>
<html>
<body>
<h2>@@Logical Operators@@</h2><br>
1.And Operators <br>
Answear:
<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>  

</body>
</html><br><br>

<!--OR Operators2-->
2.OR Operators <br>
Answear:
<?php
$x = 100;
$y = 50;
if ($x == 100 or $y == 50){
    echo "Welcome to wieland solutions!";
}
?><br><br>

<!--Xor Operators -->
3.Xor Operators <br>
Answear:
<?php
$x = 100;
$y = 200;
if($x == 100 Xor $y == 200);{
    echo "Hi pushpraj!";
}
?><br><br>

<!--String Operators -->
<!DOCTYPE html>
<html>
<body>
<h2>""String Operators . ""</h2><br>
1. Concatenation Operators <br>
Answear:
<?php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>  

</body>
</html><br><br>

<!--Concatenation assignment -->
2. Concatenation assignment Operators <br>
Answear:
<?php
$txt1 = "Wieland";
$txt2 = " solution!";
$txt1 .= $txt2;
echo $txt1;
?><br><br>

<!--Array Operators -->
<!DOCTYPE html>
<html>
<body>
<h2>Array Operators</h2><br>
1. Union Operators<br>
Answear:
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
?>  

</body>
</html><br><br>

<!--Equality Operators -->
2. Equality Operators<br>
Answear:
<?php
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yello");
var_dump($x == $y);
?><br><br>

<!--Identity Operators -->
3. Identity Operators<br>
Answear:
<?php
$x = array("a" => "pink", "b" => "Navey blue");
$y = array("c" => "Nila", "d" => "White");
var_dump($x === $y);
?><br><br>
<!--Inequality Operators -->
4. Inequality Operators<br>
Answear:
<?php
$x =array("a" => "green", "b" => "red");
$y =array("c" => "black", "d" => "yello");
var_dump($x != $y);
?><br><br>
<!--Inequality Operators -->
5. Inequality Operators<br>
Answear:
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);
?> <br><br> 

<!--Non-identity Operators -->
6. Non-identity Operators<br>
Answear:
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
?>  
