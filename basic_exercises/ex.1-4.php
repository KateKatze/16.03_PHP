<?php

/* ex. 1 */
$name = "Kate";

       for( $i=0; $i<50; $i++)
       {
          echo "$name <br>";
       }

       echo "<br><br><br>";


$name = "Kate";
$i = 0;

while ($i < 50) {
    $i++;
    echo "$name <br>";
}

echo "<br><br><br>";

$name = "Kate";
$i = 0;

do {
    echo "$name <br>";
    $i++;    
} while ($i < 50);

echo "<br><br><br>";

/* ex. 2 */

$array = array(1,2,3,4,5,6,7,8,9,0);

       foreach($array as $value)
       {
           echo "$value <br>";
       }

       echo "<br><br><br>";

for($i=0; $i<10; $i++){
    $num[$i] = rand(1, 100);
}
echo "<br>";
print_r($num);
echo "<br><br><br>";

/* ex. 3 */

$array1 = array(rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99));
$maxnum = max($array1);
echo $maxnum;

echo "<br><br><br>";

/* ex. 4 */

for($i=1; $i<=100; $i++){
    switch([$i%3==0, $i%5==0]){
        case [1,0]: 
        echo " Back-End "; 
        break;
        case [0,1]: 
        echo " Front-End "; 
        break;
        case [1,1]: 
        echo " Back-End Front-End "; 
        break;
        default: 
        echo "<br> $i "; 
        break;
    }
}

?>

