<?php
$a = array('A','B','C','D','E');
echo "Total elements are=";
echo count ($a);
?>
<?php
$a = array('Apple','Bat','Chocolate','Bat','Egg');
$newa = array_count_values($a);
echo "<br>count value of array";
foreach ($newa as $key=>$value){
echo "<br>$key - <strong>$value</strong>";
}
?>
<?php
$a = array('3','4','2','2','8');
echo "<br>sum of array=";
echo array_sum ($a);
?>
<?php
$a = array('3','4','2','2','8');
echo "<br>product of array=";
echo array_product ($a);
?>
<?php
$a = array('A','B','C','D','E');
$revarr = array_reverse($a);
echo "<br>Reverse of array";
print_r($revarr);
?>
<?php
$arr = array('Apple', 'cat', 'elephant', 'star', 'moon');
$temp = in_array('php',$arr);
echo $temp;
?>
<?php
$E = array('Apple', 'cat', 'elephant', 'star', 'moon');
$T = array_rand($E);
echo"<br>Index of array";
echo $E[$T];
?>
<?php
$E = array('Apple', 'cat', 'elephant', 'star', 'moon');
$T = array_rand($E,2);
echo "multiple index at a time";
foreach ($T as $key => $value)
{
echo "<br />$key - <strong>" . $E[$value] . "</strong>";
}
?>
<?php
$E = array('Apple', 'cat', 'elephant', 'star', 'moon');
echo"<br> unique array";
print_r(array_unique($arr));
?>
<?php
$array1 = array('Apple', 'cat', 'elephant', 'star', 'moon');
$array2 = array(10,20,30,40,50);
$NewArray = array_merge($array1,$array2);
echo "<br> merge array";
print_r($NewArray);
?>
<?php
$V = array('Apple', 'cat', 'elephant', 'star', 'moon');
echo "<br> search array";
$check = array_search('star', $V);
echo $check;
