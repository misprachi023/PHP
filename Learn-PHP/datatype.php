<?php
$name='prachi MSIHRA';
echo $name;

echo "<br/>";
echo var_dump($name);

echo "<br/>";
$num=100;
echo var_dump($num);

echo "<br/>";
$numFloat=1.1;
echo var_dump($numFloat);

echo "<br/>";
$boolean= true;
echo var_dump($boolean);

echo "<br/>";
$arr= [1,2,3,4,5, 'prachi'];
echo var_dump($arr);

echo "<br/>";
$empty=null;
echo var_dump($empty);

echo "<br/>";

// $user= new className();  // object class
$connection= ftp_connect("127.0.0.1") or die("could not connect");
echo var_dump($connection);

?>