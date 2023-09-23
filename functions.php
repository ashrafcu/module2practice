<?php
function isEven(int $n=1){
    if ($n%2==0) {
        echo "{$n} is an even number";
    } else {
        echo "{$n} is an odd number";
    }
}

function doSum(int $a=1, int $b=1, int $c=1): int {
    return $a+$b+$c;
}

function countAllNumbers(int ...$numbers):int {
    $result=0;
    for ($i=0; $i<count($numbers);$i++){
        $result+=$numbers[$i];
    }
    return $result;
}


function findFactorial (int $num) {
    $result=1;
    for ($i=$num; $i>1; $i--){
        $result *= $i;
    } return $result;
}

function sellProducts(int $noOfProduct=2, string $nameOfProduct="balls") {
    echo "Total {$noOfProduct} {$nameOfProduct}"."s have been sold.";
}

//Recursive Loop
function fibonnacci($old, $new, $end){
    static $start;
    $start = $start ?? 1;
    if($start>$end){
        return;
    }
    $start++;
    echo $old." ";
    $_temp= $old+$new;
    $old=$new;
    $new=$_temp;
    fibonnacci($old, $new, $end);
}
fibonnacci(0, 1, 50);

function increament(){
    static $number=0;
    $number++;
    echo $number;
}

?>

