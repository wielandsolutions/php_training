<?php
$day = date('D');
switch ($day){
case "Sun":
echo "Today is sunday";
break;
case "Mon":
echo "Today is Monday";
break;
case "Tue":
echo "Today is Tuesday";
break;
case "Wen":
echo "Today is Wendesday";
break;
case "Thu":
echo "Today is Thuresday";
break;
case "Fri":
echo "Today is Friday";
break;
case "Sat":
echo "Today is Saturday";
break;
default:
echo "Day is not found";
}
?>