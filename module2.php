<?php
include_once "functions.php";
/*
    for ($i=9; $i<=39; $i+=2) {
        echo $i."\n";
    }

echo PHP_EOL;
*/
function fetchEvenNumbers(int $n, int $max){
    while ($n<=$max){
        echo $n . PHP_EOL;
        $n+=2;
    }
    echo "=================== \n";
    }
    fetchEvenNumbers(2,20);
/*
$b=7;
do {
    $b++;
    echo $b.PHP_EOL;
} while ($b<14);

echo "Go to loop system";
echo PHP_EOL;
$i=12;
a: $i++;
echo $i.PHP_EOL;
if ($i<23) goto a;

echo "\n";
echo PHP_EOL;

for ($a=17, $b=1; $a>0; $a--, $b++) {
    echo $b."-".$a;
    echo PHP_EOL;
}

//Built-in Function
$x="Bonjour!";
$length=strlen($x); //To find the length of a string
echo $length;


//User-defined Function
function multiplyTwoNumbers($num1=5,$num2=100) {
    //$num1=10;
    //$num2=20;
    echo $num1*$num2;
}
multiplyTwoNumbers(16,3); //Pass parameters through functions
echo PHP_EOL;
multiplyTwoNumbers(345,);//Defalut value must be assigned to the last properties, not at the beginning or the middle.


//Absolute Value

var_dump(abs(-5.6));
var_dump(abs(5));


for ($i=0; $i<100; $i+=5) {
    //echo $i."\n";
    echo $i % 10 == 0? $i."\n":'';
}

echo "=======\n";
$j=0;
while ($j++ <9) {
    echo $j;
    echo PHP_EOL;
}

echo "=======\n";
$j=0;
while (++$j <12) {
    echo $j;
    echo PHP_EOL;
}
echo "=======\n";

for ($i=10; $i<30; $i+=2){
    echo $i;
    echo PHP_EOL;
    if ($i==26){
        break;
    }
}

echo "=======\n";

$very1=0;
$very2=1;
$very3=1;
for($i=0;$i<20;$i++){
    echo $very1. " ";
    $very2 = $very3;
    $very3 = $very2 + $very1;
    $very1=$very2;
}
*/
//Encapsulation
/*
isEven(231);
echo PHP_EOL;
echo doSum(23,34);
echo PHP_EOL;
echo "→"." ";


    $tempCelsius=50;
    $tempFahren=sprintf("%.2f",(($tempCelsius*(9/5))+32));
    echo "The temperatur in Fahrenheit is :".$tempFahren;
echo PHP_EOL;




echo countAllNumbers(3,56,34,23,456);
echo PHP_EOL;

echo findFactorial(5)." is the factorial.";
echo PHP_EOL;
echo sellProducts(5, "cricket bat");
echo PHP_EOL;
echo fibonnacci(0, 1, 20);
echo PHP_EOL;

$num1=647;
$num2=16;
$num3=67;

if ($num1>$num2 && $num1>$num3) {
    echo "$num1 is the largest number.";
} elseif ($num2>$num3 && $num2>$num1) {
    echo "$num2 is the largetst number.";
} else {
    echo "$num3 is the largest number.";
}
echo PHP_EOL;

$n1=12;
$n2=34;
$n3=23;
$max = $n1;
if ($max<$n2) {
    $max=$n2;
}
if ($max<$n3){
    $max=$n3;
}
echo $max."\n";


//While Loop
$number21=34;
while (0<=$number21) {
    echo "The number is ". $number21. "\n";
    $number21--;
}


//Foreach Loop for Arrays
$countries =["Bangladesh", "Srilanka", "Nepal", "India"];
foreach($countries as $entries) {
    echo $entries."\n";
}



//Nested For Loop

for ($nums=20; $nums<35; $nums++) {
    if ($nums==29) {
        break;
    }
    echo $nums."\n";
}


for ($i=1; $i<=2; $i+=1){
    echo "The number table of ". $i . "\n";

    for ($j=1; $j<=10; $j+=1){
        $results = $i*$j;
        echo $i. "×" .$j. "= $results \n";
    }
    echo "============= \n";




$numbers=[1,3,4,5,7,9,12,14,15,16,34,39,42,44,56,102,140];
function isEvenNumber ($n) {
    if ($n %2 ==0){
        return true;
    }
    return false;
}
$evenNumbers=array_filter($numbers,"isEvenNumber");
print_r($evenNumbers);



$people = [
    ['name'=> 'John', 'gender' => 'M'],
    ['name' => 'Kane', 'gender' => 'M'],
    ['name' => 'Elizabeth', 'gender' => 'F'],
    ['name' => 'Stokes', 'gender' => 'M'],
    ['name' => 'Kate', 'gender' => 'F'],
    ['name' => 'Alice', 'gender' => 'F'],

];

function isMale ($person) {
    if ($person['gender']==='M') {
        return true;
    } 
    return false;
}

function isFemale ($person) {
    if($person['gender']=='F'){
        return true;
    }
    return false;
}

$male = array_filter($people, "isMale");
$female= array_filter($people, "isFemale");
print_r($female);
*/
$shapeNumbers=[1,2,3,4,5,6,7,8];
function createSquares($n) {
    return $n * $n;
}

function createCubes($n) {
    return $n * $n * $n;
}

$cubes = array_map("createCubes", $shapeNumbers);
$squares = array_map("createSquares", $shapeNumbers);
print_r($squares);
echo "==================== \n";
print_r($cubes);

echo PHP_EOL;

function recursiveAddNumbers($n) {
    if($n==123){
        return;
    }
    echo $n. "\n";
    recursiveAddNumbers($n+2);
}
recursiveAddNumbers(1);
echo "==================== \n";
increament();
?> 