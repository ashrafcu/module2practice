<?php
$number=12;
$result=$number % 2;
switch ($result) {
    case 0;
        switch ($number) {case $number>0: echo "$number is a positive even number"};

}


define ("PI", 3.14159);
echo PI;
echo "================= \n";
echo PHP_EOL;
echo "Hello, welcome to the world of PHP programming!";
echo "\n";
printf ((20+5)*3/4);
echo "================= \n";
echo PHP_EOL;

$marks = 81;
if ($marks>=60 && $marks<80) {
    echo "Passed.";
} elseif ($marks>=80 && $marks<=100) {
    echo "Invalid Result.";
} else {
    echo "Failed";
}
echo "\n";
printf((10+5)-(3*4));
echo "================= \n";
echo PHP_EOL;

$number=12;
$remainder=$number%2;
if ($remainder==0) {
    echo "The number $number is even.";
} else {
    echo "The number $number is odd.";
}

echo "================= \n";
echo PHP_EOL;
$color="red";
if($color == "red" || $color=="blue" || $color=="yellow"){
    echo "Primary Color"; 
} else {echo "Secondary Color";}

echo "================= \n";
echo PHP_EOL;

for ($i=0; $i<10;$i++){
    if ($i==6){
        continue;
    }
    echo $i;
    echo PHP_EOL;
    
}

echo "================= \n";
for ($i=20; $i>1; $i--){
    echo $i;
    echo PHP_EOL;
    if ($i==9){
        break;
    }
}
echo "================= \n";


?>