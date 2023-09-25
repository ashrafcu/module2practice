<?php 
/* $vegetables=array('potato', 'tomato', 'pumpkin', 'bitter gourd', 'lady finger', 'brinjal');
$addVegs=array('snake gourd', 'capsicum', 'jackfruit');
$someVegs=array_splice($vegetables, 3, 2, $addVegs);
print_r($someVegs);
echo "\n";
print_r($vegetables); */

/* $biscuits=array('Nutty Biscuits', 'Butter Toast Biscuits', 'Energy Biscuits', 'Potata', 'Salt Biscuits');
$cakes=array('Dano', 'All Times', 'Suresh', 'Bonoful','Trisha', 'Fulkoli', 'Shaad');

$allBakeryItems=array_merge($biscuits, $cakes);
print_r($allBakeryItems); */

/* $numbers=array("stu1"=>34, "stu2"=>67, "stu3"=>98, "stu4"=>45, "stu5"=>87, "stu6"=>78, "stu10"=>39, "stu11"=>40, "stu12"=>58, "stu19"=>60);

$numsP1=array_slice($numbers, 2, 2, true);
$numsP2=array_slice($numbers,-1,true);
$addNums=array("stu7"=>56,"stu8"=>48);
$addAllNums=$numsP1+$numsP2+$addNums;
print_r($addAllNums); */

/* $string= "Hello, Bangladesh!";
$length = strlen($string);
echo "The length of the string is: " .$length; */

/* $string= "Hello, Bangladesh!";
$lowercase =strtolower($string);
echo $lowercase; */

/* $string= "Hello, Bangladesh!";
$position =strpos($string, "Bangladesh");
if ($position == true) {
    echo "The position of the string is: " .$position;
} else {echo "Not found in the stack.";}
 */

/*  $string="rice,pulse,salt";
 $foodArray= explode(",",$string);
 print_r($foodArray); */


 /* function generatePassword ($length) {
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()";
    $password=" ";
    $passLength=$length+1;
    for ($j=0; $j<$passLength; $j+=2) {
        $password .= $characters[rand(0, strlen($characters)-1)];
        return $password;
    }
 }
 echo generatePassword(16); */

 //https://github.com/faisal2410/learn-laravel


 $helloText="Bangladesh is my country. I love my country under all circumstances.";
//  echo strlen($helloText);

// print_r(strtolower($helloText));

// print_r(strtoupper($helloText));
/* 
$findMyString= "country";
$posString= strpos($helloText, $findMyString);

if ($posString=== false) {
    echo "The string '$findMyString' was not found in the string '$helloText'";
} else {
    echo "The string '$findMyString' exists in the string '$helloText' and exits at position " .$posString. ".";
}


echo PHP_EOL;

$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
} */

/* $someText=substr($helloText, -32);
print_r($someText); */

$vowels=array('a','e','i','o','u','A', 'E', 'I', 'O','U');
$onlyConsonants=str_replace($vowels,"*",$helloText);
print_r($onlyConsonants);















?>