<?php
$a = array('Apple', 'cat', 'elephant', 'star', 'moon');
echo"<br> end of array=>";
echo end($a);
?>
<?php
$name = "vidhi";
$subject = "php";
$b = compact("name", "subject");
echo"<br> compact=>";
print_r($b);
?>
<?php
$c = array("a" => "Apple", "b" => "bag", "c" => "chocolate");
$fliparray = array_flip($c);
echo"<br> carray flip=>";
print_r($fliparray);
?>
<?php
$a=array("vidhii","A","c++","java","php","android");
$b=array("vidhi","A","java","php");
$diff = array_diff($a, $b);
echo"<br> compare values of two array";
print_r($diff);
?>
<?php
$a = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$b = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
echo"<br> array intersect";
print_r(array_intersect($a,$b));
?>
<?php
$a = array("i"=>"c","want"=>"c++","learn"=>"php");
$b = array_values($a);
echo "<br> array values";
foreach($b as $key => $value) {
echo " <br />$key - $value";
}
?>
<?php
$a=array("c","c++");
array_push($a,"java","php");
echo"<br> push operation";
print_r($a);
?>
<?php
$a = array("c", "c++", "Java", "PHP", "ASP");
echo"<br> pop operation";
array_pop($a); 
print_r($a);
array_pop($a);
print_r($a);
?>
<?php
$v = "Hello , my name is vidhi";
$a = explode(" ",$v);
echo"<br> explode";
print_r($a);
?>
<?php
$a = array("i","am","vidhi");
$v = implode(" ", $a);
echo"<br> implode";
echo $v;
?>





