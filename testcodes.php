<?php

//Task 1
/*
function findEvenNumbers(){
    for($i=0; $i<20; $i%2==0) {
        echo $i+=2;
        echo "\n";
    }
}
findEvenNumbers();

echo "========= \n";

function getEvenNumbers(){
    $n=0;
    do {
        echo $n+=2;
        echo "\n";
    } while ($n%2==0 && $n<20);
    echo "=============== \n";
}
getEvenNumbers();

function fetchEvenNumbers(int $n, int $max){
while ($n<=$max){
    echo $n . PHP_EOL;
    $n+=2;
}
echo "=================== \n";
fetchEvenNumbers(2,20);

//Task 2

function getNums(int $startNo, int $endNo){
    for ($i=$startNo; $i<=$endNo; $i++) {
        if ($i %5 ==0) {
            continue;
        }
        echo $startNo*$i .PHP_EOL;
    } 
}
getNums(1,50);
echo "=================== \n";

//Task 3
$number1=0;
$number2=1;
$number3=1;

    for ($i=0;$i<10;$i++) {
        echo $number1 . PHP_EOL;
        $number2=$number3;
        $number3=$number2+$number1;
        $number1=$number2;
        if($number1>100) {
            break;
        }

    }
echo "=================== \n";


//Task 4
function initiateFibonacci(int $number1, int $number2, int $number3, int $finalNumber) {
    for ($i=0;$i<($finalNumber+1);$i++) {
        echo $number1 . PHP_EOL;
       $number2=$number3;
        $number3=$number2+$number1;
        $number1=$number2;

    }
}
initiateFibonacci(0,1,1,15);

//Question 1
for ($i=1; $i<10; $i+=1) {
    if($i%2==1) {
        continue;
    }
    echo $i . PHP_EOL;
   
}
echo PHP_EOL;

function greet(string $name){
    echo 'Hello, '.$name.'!';
}
greet("John");
echo PHP_EOL;
echo PHP_EOL;
function findFactorial (int $factNum) {
    $start=1;
    for ($i=$factNum; $i>1; $i--){
        $start *= $i;
    } return $start;
}
echo findFactorial(10);
*/
echo PHP_EOL;
function initiateFibonacci(int $number1, int $number2, int $number3, int $finalNumber) {
    for ($i=0;$i<$finalNumber;$i++) {
        echo $number1 . PHP_EOL;
       $number2=$number3;
        $number3=$number2+$number1;
        $number1=$number2;

    }
}
initiateFibonacci(0,1,1,15);
echo PHP_EOL;

/*
function recursiveGetFactorial($n) {
    $start=1;
    for($i=$n; $i>1;$i--){
        $start*=$i;
    
    if ($i==1){
        break;
    }
} return $start;
    recursiveGetFactorial($n--);
}
echo recursiveGetFactorial(2);
*/
?>