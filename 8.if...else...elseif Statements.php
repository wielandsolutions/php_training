<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
?><br><br>

<!--The if Statement-->
The if Statement:-<br>
Answear:-
<?php
$a = 5;
$b = 5;
if($a<$b);
{
    echo "a is  less than b";
}
else{
    echo "a is not less than b";
}

?><br><br>

<!--The if...elseif....else Statement-->
The if...elseif....else Statement:-<br>
Answear:-
<?php
$a = 5;
$b = 5;
if($a < $b);
{
    echo "a is the less than b";
}
elseif($a > $b);
{
    echo "a is greater than b";
}
else{
    echo "a is equal to b";
}
?>