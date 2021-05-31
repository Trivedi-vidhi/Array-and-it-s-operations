<?php 

$a[0] = 10;
$a[1] = 11;
$a[2] = 12;
$a[3] = 13;
$a[4] = 14;
echo "Using method 1";
for ($i=0;$i<count($a);$i++)
{
echo"<br/>".$a[$i];
}


$b[] = 'A';
$b[] = 'B';
$b[] = 'C';
$b[] = 'D';
$b[] = 'E';

echo "<br/>Using method 2";
for ($i=0;$i<count($b);$i++)
{
echo"<br/>".$b[$i];
}


$c = array(10,20,30,"vidhi","Trivedi");
echo "<br/>Using method 3";
echo $c[3];
for ($i=0;$i<count($c);$i++)
{
echo"<br/>".$c[$i];
}

echo "Using in-built fuctions.";
echo"<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($c);
echo"<pre>"


?>