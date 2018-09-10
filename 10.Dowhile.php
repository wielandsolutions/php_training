<?php 
$i = 0;
do 
{
    echo $i;
}
while($i > 0); //$i is not bigger than 0
?><br><br>


<!--Example-->
1.do...while Loop:-<br>
Answear:-
<?php
do {
    if ($i < 5) {
        echo "i is not big enough";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
echo "i is ok";

    /* process i */

} while (0);
?><br><br>

<!--Example-->
2.For...while Loop:-<br>
Answear:-


<?php
for($i=0,$j=50; $i<100; $i++) {
while($j--) {
    if($j==17) goto end; 
}  
}
echo "i = $i";
end:
echo 'Hi Raj';
?>
