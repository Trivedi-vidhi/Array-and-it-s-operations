<?php
$a[0] = 10;
$a['c'] = "chocolate";
$a['php'] ="web development";
$a [10] ="ten";
$a[50] =50.50;
 echo"using method 1<br>";
 var_dump($a);
 echo"<pre><br>";
 
 
 echo "using method 2";
 $a =  array(
 0=>10,
 "c"=> "chocolate",
"php"=>"WEB DEVELOPMENT",
10=> "ten",
50=>50.50
);

echo "C for".$a['c'];
foreach ($a as $value) {
	echo "<br> Value is $value";	
}

foreach($a as $key =>$value) {
	echo"<br/> Key is <b> $key</b> and value is <b>$value</b>";
}
echo"<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo"<pre>"	

 ?>
