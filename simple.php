<?php

//Task 1

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

function getFibonnacci($oldNo, $newNo, $endNo){
    static $startNo;
    $startNo = $startNo ?? 1;
    if($startNo>$endNo){
        return;
    }
    $startNo++;
    echo $oldNo." ";
    $_temp= $oldNo+$newNo;
    $oldNo=$newNo;
    $newNo=$_temp;
    getfibonnacci($oldNo, $newNo, $endNo);
}
getFibonnacci(0, 1, 20);
?>