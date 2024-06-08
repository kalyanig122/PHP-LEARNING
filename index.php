<!-- <h1>Welcome to php</h1> -->
 <?php 
/*echo "welcome to nanded";


$name="nanded";
echo $name;
echo "<p>hello $name</P>"; 
echo "siddhi";
?>
<h3>h3 heading</h3>
<?php
echo "patange";
?>

<?php
function mytest(){
    static $x=0;
    echo $x."<br>";
    $x++;
}
mytest();//0
mytest();//1
mytest();//2

//constant variable declaration
define("student_age",18);
echo student_age."<br>"; //access

//concatenation
echo'your age'.student_age;
for($i=0; $i<=10; $i++){
    echo $i."<br>";
}

$a=1;
while($a<=10)
{
    echo $a."<br>";
    $a++;
}
*/
?>

<!-- date:27 may 2024 -->
<?php
/*$str = "welcome to Predrag academy";
//Get length of the string
echo strlen($str);
echo "<br>";

//convert to Upper
echo strtoupper($str);
echo "<br>";

//find positionof the word
echo stripos($str,"To");
echo "<br>";

//extract substring
echo substr($str , 0, 6);
echo "<br>";

//convert to Lower
echo strtolower($str);
echo "<br>";

//converting the first letter to the upper case
echo ucfirst($str);
echo "<br>";

//converting the first letter  of each word of the sentense to the upper case
echo ucwords($str);
echo "<br>";

//encrypt char(easily decryptable)
echo md5($str);
echo "<br>";

//encrypt char(stronger and more secure)
echo sha1($str);
echo "<br>";

$password ="1234";
$encrypt_code = md5($password);

if($encrypt_code === md5($password)){
    echo "password correct";

}
else{
    echo "password Incorrect";
 }
 echo "<br>" ;

 //trim method
 echo trim($str);
 echo "<br>" ;

 echo ltrim($str);//left trim
 echo "<br>" ;

 echo rtrim($str);//right trim
 echo "<br>" ;

 echo str_word_count($str);
 echo "<br>" ;


 //string reverse
 echo strrev($str);
 echo "<br>" ;

 //string repeat
 echo str_repeat($str , 3);
 echo "<br>" ;

 //str_replace
 echo str_replace("academy", "systems" ,$str);
 echo "<br>" ;

 //str_split
 $arr = str_split($str ,6);//divide the string into differnt parts and store it in array, where each element of the array contains substring of specified string with given length.
              // string,length
 print_r($arr);//output: Array ( [0] => welcom [1] => e to P [2] => redrag [3] => acade [4] => my )
 echo "<br>" ;                       // 012345        012345        012345       012345        01..  (total 6)
 echo "<br>" ; 
 echo "<br>" ; 
 echo "<br>" ; 
 echo "<br>" ; 
?>
<?php
//date : 28 May 2024
$str = "WELCOME to Predrag academy";

$strWithHtml = "<b>WELCOME</b> to Predrag academy";
echo $strWithHtml;
echo "<br>" ; 

//remove html from string
echo strip_tags($strWithHtml);
echo "<br>" ;
echo "<br>" ;
echo "<br>" ;

$contact ="1234567890";
echo str_pad($contact,12,"*");

$num ="10,4,6,4";
$arr = explode(",",$num);//converts string into an array.
echo "<br>" ;
print_r($arr);//returns an array object.
echo "<br>" ;

echo array_sum($arr);// returns sum of all the elements of specified array.
echo "<br>" ;

//array to string
echo "implode".implode(",",$arr);//converts array into string.
echo "<br>" ;
echo join(",",$arr);//joins the array and present string.
echo "<br>" ;

//convert first letter of the string to lowercase
echo lcfirst($str);
echo "<br>" ;

echo ucfirst($str);
echo "<br>" ;




 // string wordwrap
 echo wordwrap($str,20,"<br>");
 echo "<br>" ;

 //random shuffle
 echo str_shuffle($str);
 echo "<br>" ; 

 //find last char
 echo strrchr($str ,"a");
 echo "<br>" ; 

 //find string
 echo strstr($str,"to");
echo stristr($str,"pre");
echo "<br>" ; 

//compare string
$str1 = "nanded";
$str2 = "Nanded";
echo strcmp($str1,$str2);
$str1 = "nanded";
echo "<br>" ;

//case cmp
echo strcasecmp($str1,$str2);
echo "<br>" ;

*/
?>
<?php
//date :29 May 2024

/*
//changing the time zone 
date_default_timezone_set("Asia/kolkata");
//echo date_default_timezone_get();
 

//date
//D: Day Name
//d :date in number
//m : Month in number
//M : Month Name
//y : year in two digits
//Y : full year for ex:2024.
//H,h : Hours , i: minutes , s : seconds. format =>h:i:s .

echo date("Y-m-D H:i:s");//H:i:s  =>shows server set timing.
echo "<br>" ;
echo date("D,d/m/Y");
echo "<br>" ;

//get current date and time
$currenttime = time();//it returns timestamp
echo "<br>" ;
//Note : in mysql date and time are stored in timestamps.
echo "<br>" ;
echo $currenttime;
echo "<br>" ;
$date = date("y-m-d");
//date to timestamp conversion
echo strtotime($date);
echo "<br>";

//timestamp to date conversion
echo date("y-m-d",$currenttime);

//                  h  m s m  d  Y
$timestamp = mktime(12,0,0,05,25,2024);// it also convers into timestamp
echo "<br>";
echo $timestamp;
echo "<br>";
 //there are different types of calenders.

 //gregorian dates and julian dates
 
//check date according to our current calender
$month = 5;
$Date = 26;
$year = 2024;
if(checkdate($month,$Date,$year)){
    echo "Valid date";
    echo "<br>";
}else{
    echo "invalid date";
    echo "<br>";
}

//current date in array
$todayDate = getdate();//returns an array which includes current date and time.
print_r( $todayDate);
echo "<br>";
//incrementing or decrementing the current (or) specified date
*/
?>
<?php 
/*
//date : 31 May 2024


//add and substract the date
$today="2024 -05-31";

$nextDate = date("Y-m-d",strtotime($today.'+10days'));
$preDate = date("Y-m-d",strtotime($today.'-10days'));
echo  $nextDate;
echo "<br>";

//get the day of week
echo date ("D l",strtotime($today));
echo "<br>";
//leap year(L)
$Cyear ="2024";
if(date("L",mktime(0,0,0,1,1,$year))){
  echo "Cyear is leap year";
}else{
  echo "Cyear is not  leap year";
}
echo "<br>";

//compare date
$date1 = "2024-05-31";
$date2 = "2024-06-10";
if( $date1 <  $date2){
  echo "date1 is earlier than date2";
}else{
  echo "date1 is later than date2";
}
echo "<br>";


//date difference
$date1 = new DateTime("2024-05-31");
$date2 = new DateTime("2024-06-10");
$diff = $date1->diff($date2);
echo $diff->days;
echo "<br>";

//calculate the date of the same day last week
echo date("Y-m-d l",strtotime("-1 day"));
echo "<br>";
echo date("Y-m-d l",strtotime("-1 week"));
echo "<br>";
echo date("Y-m-d l",strtotime("-1 month"));
echo "<br>";
echo date("Y-m-d l",strtotime("-1 year"));

echo "<br>";
//calculate date difference without using date object

$date1 = '2024-05-31';
$date2 = '2024-06-15';

$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);

$diffInSeconds = abs($timestamp2 - $timestamp1);
$diffInDays = $diffInSeconds / (60 * 60 * 24);

echo "The difference between $date1 and $date2 is $diffInDays days.";
*/

?>
<?php
//date : 1 june 2024
//form submission

?>