<?php
/* $fruitsArray=array('Apple','Orange','Mango', 'Cherry', 'Avocado');
echo $fruitsArray[0];
echo PHP_EOL;

$person=['John', 'Kate', 'Doe', 'Stokes','Marshall'];
echo $person[4];
echo PHP_EOL;
for ($i=0; $i<count($person);$i++){
    echo "$person[$i]".PHP_EOL;
}
echo PHP_EOL; */

//Deep Copy
/* $student=['fname'=>'Zahirul','lname'=>'Islam'];
$newstudent= $student;
$student['lname']='Alam';

print_r($student);
echo PHP_EOL;
print_r($newstudent); */

/* $fruitsArray=array('Apple','Orange','Mango', 'Cherry', 'Avocado');
$someFruits=array_slice($fruitsArray,1,-1, true);
print_r($someFruits); */

/* $randomNumbers= array("a"=>12, "b"=>45, "c"=>34, "d"=>56, "e"=>34,"f"=>12, "g"=>33);
$randomData=array_slice($randomNumbers, 1, -1, true);
print_r($randomData); */


//Leap Year
/* $year = 1700;
if($year%4==0 && $year%100 ==0 && $year%400==0){
    echo "{$year} is a leap year";
} elseif ($year%4==0 && $year%100==0) {
    echo "{$year} is not a leap year";
} elseif ($year%4==0){
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

if(0==$year%4 && (0!=$year%100 ||0==$year%400)) {
    echo "{$year} is a leap year";
} else {echo "{$year} is not a leap year";} */

/* $numbers=[2,3,5,6,8,9];
$countNumbers=count($numbers);
echo $countNumbers;
echo PHP_EOL;

$addNumbers = array_push($numbers,34,67,20,123);
print($addNumbers); */

/* $fruits = ["Apple", "Banana"];
array_push($fruits, "Cherry", "Mango", "Avocado", "Kiwi", "Dragon Fruit", "Jackfruit"); 
$lastFruit = array_pop($fruits); 
print_r($lastFruit);
echo PHP_EOL; 
print_r($lastFruit); */

    /* fscanf(STDIN, "%s", $name); */
    $name="OBGHRT";
    for($i=0; $i<strlen($name);$i++){
        if($name[$i]=='a' 
        || $name[$i]=='e' 
        || $name[$i]=='i' 
        || $name[$i]=='o'
        || $name[$i]=='u' 
        || $name[$i]=='A'
        || $name[$i]=='E'
        || $name[$i]=='I'
        || $name[$i]=='O'
        || $name[$i]=='U'
        ) { 
            $hasVowel=true;
            break;
        } else {$hasVowel=false; break;}
    }
    if($hasVowel==true) {
        echo 'The string contains a vowel.';
    } else {
        echo 'The string does not contain any vowel.';
    }
    

?>