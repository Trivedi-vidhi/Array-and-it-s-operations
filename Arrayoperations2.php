<?php
$a = range("11", "20");
echo "range of array";
foreach($a as $key => $value)
{
echo "<br /> $key - $value ";
}
?>
<?php
$b = array(87,66,80,54,13,19);
sort($b);
echo "<br>sort array=";
print_r($b);
?>
<?php
$c = array(87,66,80,54,13,19);
rsort($c);
echo "<br>rsort array=";
print_r($c);
?>
<?php
$d = array(87,66,80,54,13,19);
asort($d);
echo "<br>asort array=";
print_r($d);
?>
<?php
$e = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
ksort($e);
echo"<br> key sort";
foreach ($e as $key => $value) {
echo "<br />$key - $value ";
}
?>
<?php
$f = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
krsort($f);
echo"<br>reverse key sort";
foreach ($f as $key => $value) {
echo "<br />$key - $value ";
}
?>
<?php
$g = array("Football", "Baseball", "Hockey", "Tennis","Boxing");
shuffle($g); 
echo"<br> shuffle the array";
foreach ($g as $key => $value) {
echo "<br /> $value ";
}
?>
<?php
$h = array("a" => "apple", "b" => "banana");
echo"<br> array key exists";
echo array_key_exists('a',$h);
?>
<?php
$i = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
$uppercase = array_change_key_case($i,CASE_UPPER);
echo"<br> array change key case";
print_r($uppercase);
?>
<?php
$i = array("Banana" , "Apple" , "Mango");
$j = array("Yellow","Red", "Green");
$k = array_combine($i, $j);
echo"<br> array combine";
print_r($k);
?>

