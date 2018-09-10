<?php  
function sayHello(){  
echo "Hello PHP Function";  
}  
sayHello();//calling function  
?>  <br><br>

<!--Function Arguments-->
1.Function Arguments:<br>
Answear:-
<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?><br><br>
<!--Call By Reference-->
1.Call By Reference:<br>
Answear:
<?function sayHello($fname,$age){
    echo "Hello $name. you are $age years old<br/>";
}
sayHello("jani",27);
sayHello("pushpraj",23);
sayHello("john",48);
?><br><br>

<!--Default Argument Value-->
2.Default Argument Value:<br>
Answear:
<?php
function MyTest($name = "wieland"){
    echo "Hello $name<br/>";
}
MyTest("Rajesh");
MyTest(); //passing no value
MyTest("john");
?><br><br>
<!--Returning Value-->
3.Returningt Value:<br>
Answear:
<?php
function cube($n){
    return "$n"*"$n"*"$n";
}
echo "cube of 3 is :".cube(3);
?>


