<!doctype <!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    <?php
        function adder($str2){
      
            $str2.="call by refrance";

        }
        $str2="hello";
        adder($str2);
        echo $str2;

    ?>
    <?php
    //default argument
    function sayHello($name="manjeet"){
        echo "Hello $name </br>";
    } 
    sayHello("ramu");
    sayHello();//passing no value
    sayHello("ram");
    ?>
    <?php
    // returning value
    function cube($n){
        return $n*$n*$n;
    }
    echo "cube is 3:".cube(3);
    ?>
    <br>
    <?php
        function sum($x, $y) {
        $z = $x + $y;
         return $z;
        }

        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4);
    ?> 
<br>
    <?php
    //recursive function
    function display($number){
        if($number <=8){
            echo"number<br>";
            display($number+1);

        }
    }
    display(1);
    ?>
    <br>
    <?php
    //factorial number
    function factorial($m){
        if($m<0)
        return -1;/*worn value*/
        if($m==0)
        return 1;/*terminating value*/
        return($m* factorial($m-1));
        }
        echo factorial(9);
    ?>
    <br>
    <?php
        //vraiable lenght argument function
        function add(...$numbers){
        $sum=0;
        foreach($numbers as $n){
        $sum+=$n;
        }
        return $sum;
        }
        echo add(1,2,3,4);
        /*php support variable lenght argument function.
         it means you can pass 0,1 number of arguments in function.
         to do so you need to use 3 ellips(dots)before the arguments.*/
    ?>
</body>
</html>