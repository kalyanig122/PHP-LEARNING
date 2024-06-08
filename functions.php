<?php
//php is a weakly typed language
/*$num1 = (string) 10; //it will consider as a string.
$num2 = "abc"; //it will consider this string as an integer.

var_dump($num1);
echo "<br>";

echo gettype($num1); //returns type of a variable
echo "<br>";

//echo (int)$num1 + $num2 ;//it  will do the sum 
echo "<br>";


//is_null . is_int . is_numeric . is_float . is_string . is_double
if (is_string($num1)) {
    echo "integer";
} else {
    echo "Not integer";
}
echo "<br>";
if (is_numeric($num2)) {
    echo "yes";
} else {
    echo "No";
}
echo "<br>";
//reference variable:
$a = 10;
$b = &$a; //it creates a reference variable
$a = 30;
echo "A" . $a;
echo "<br>";

echo "B" . $b;
echo "<br>";
echo "<br>";
$b = 40; // Now it will change its value as well as a's value.
echo "A" . $a;
echo "<br>";
echo "B" . $b;

echo "<br>";
echo "<br>";
$c = 2;
$d = $c;
$c = 3;
echo "C" . $c;
echo "<br>";
echo "D" . $d;

echo "<br>";

//File Handling
$file = fopen("abc.txt", "r"); //r = read
echo fread($file, "22");


$file1 = fopen("abc.txt", "a"); //a = append
fwrite($file1, "Nanded");
echo fread($file, "6");
fclose($file);
echo "<br>";*/



//what is difference between php7 and php8 ?
//current version 8.3.
?>

<?php
//date : 5 june 2024

//Magic constants OR Magic functions

/*$x = "Hello World";
echo "$x. The currentn Line number is" . __LINE__ . ".";
echo "<br>";
echo "$x. The currentn PHP script name is" . __FILE__ . ".";
echo "<br>";

echo "$x. Directory of the current PHP script name is" . __DIR__ . ".";
echo "<br>";

function hello()
{
    $x = "Hello World";
    echo "$x. The function name is" . " " . __FUNCTION__ .   "";
}
hello();
echo "<br>";
class myclass
{
    public function _construct()
    {
        echo "Inside the constructor of " . __CLASS__ . "";
        echo "<br>";
    }

    function getClassName()
    {
        echo "from an instance method of"  . __CLASS__ . "";
        echo "<br>";
    }

    function mymethod()
    {
        echo "Calling" . __METHOD__ . "of" . __CLASS__;
        echo "<br>";
    }
}

$obj = new myclass;
$obj->getClassName();
$obj->mymethod();


echo "<br>";

//special variable
$a = "Hello";
$$a = "World";

echo $a;
echo "<br>";
echo $Hello;


?>

<?php
//1. Numeric /Index Array

$arr = array();
$arr[0] = "Nanded";
$arr[1] = "is";
$arr[2] = "my";
$arr[3] = "city";

print_r($arr);
var_dump($arr);//it will provide the datatypes of each element with their length(if it is a string).
echo $arr[1];

$arr1 = array("nanded","pune","latur");
print_r($arr1);


//2.Associate Array
$associateArr = array(
    'name' => 'ABC',
    'class' => 'BCA',
    'city'=> 'Nanded'
);

print_r($associateArr);
echo $associateArr['class'];
echo "<br>";

//3.multi-dimentional Array
$mulArr = array(
    'name' => 'ABC',
    'class' => 'MCA',
    'City'=> 'Nanded',
    'Education' => array(
        array("class" => "SSC","college" => "XYZ" , "passing" => 2017),
        array("class" => "HSC","college" => "XYZ" , "passing" => 2019),
        array("class" => "BCA","college" => "XYZ" , "passing" => 2022)
    )
);


print_r($mulArr ['education'][0]);


echo "<br>";
//changes ths case of the keys
$mulArr = array_change_key_case($mulArr,CASE_LOWER);//CASE_UPPER , CASE_TITLE
echo $mulArr['city'];


echo $mulArr;// o/p:Array

//Array access
//$mulArr['education'];

//Object access
//$mulArr->education;*/




?>
<?php
//date : 6 june 2024

/*$arrNum = array(1,2,5,6,7,3,4,8,57);
//array_chunk() converts the array into a multi-dimentional array
$chunk = array_chunk($arrNum,3);// parameters : array and chunk-count.
print_r($chunk);
echo "<br>";


//is_array
if(is_array($arrNum)){
    echo "variable is an array";
}
else{
    echo "variable is not an array";
}
echo "<br>";

//in_array()
if(in_array(8,$arrNum)){
    echo "the given number is available in an array";
}
else{
    echo "the given number is not available in an array";
}
echo "<br>";

//array reverse
$arrRev =array_reverse($arrNum);
print_r($arrRev);
echo "<br>";
 
// diffrent sort flags
$sort = sort($arrNum ,SORT_REGULAR);//assending order
print_r($arrNum);
echo "<br>";*/




?>
<?php

//date 7 june 2024


$arrNum1 = array(20,30,40,50);
$arrNum2 = array(20,30,40,10);
$arrComm = array_intersect($arrNum1,$arrNum2);//searches for the common elements from given arrays
 //it only given the difference of first argument(array)
print_r($arrComm); // o/p : 20,30,40
echo "<br>";

echo array_sum($arrNum1);// returns sum of all elements of an array
echo "<br>";

$keyArr = array_search('20',$arrNum1);//it returns the index of the element
//if element doesn't exist then it returns nothing
//what is the diffrence between in_array() and array_search() is that in_array() only gives true or false whereas array_search() will return the index of the element(if present). 
print_r($keyArr);
echo "<br>";

//what is the diffrence between array_combine() and array_merge()
 //array_combine()

 $key =array("name", "class", "city");
 $value = array("kalyani", "BCA","Nanded");
 $newArray = array_combine($key,$value);//it only take two arguments
 print_r($newArray);
 echo "<br>";


 //array_merge()
 $arrMerge = array_merge($key,$value,$value);//it can take any number of arrays as an argument
 print_r($arrMerge);
 echo "<br>";

 //compact() function
 $name ="abc";
 $age = 10;
 $arrComp =compact("name","age");//it takes the variables as an argument and form an associative array(key-value pair).
 print_r($arrComp);
 echo "<br>";

 //range() function
 $evenNum = range(2,10,2);//aruments : 1st->start point , 2nd->end point , 3rd->step/jump/difference
 print_r($evenNum);
 echo "<br>";

 //list() function
 $strArr =array("kalyani", "BCA","Nanded");
 list($name,$class,$city) = $strArr;//it assigns the elements of an array to the variables passed in the list
 echo $name."  ".$class."  ".$city;
 echo "<br>";

 //array diff() function
 $arrDiff = array_diff($arrNum1,$arrNum2);//it returns the different value/element from the given arrays
 //it only given the difference of first argument(array)
 print_r($arrDiff);// o/p : 50
 echo "<br>";








?>
