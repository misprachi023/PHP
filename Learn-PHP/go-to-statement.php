<?php
$x = 13;// if condition is wrong then run code line no. 6 and 8 or if condition is true then run code og line 8
if ($x + 2 == 12) {
    goto label;
}
echo $x;
label:
echo "hello";
?>
<?php
for($i=0; $i<10; $i++){
    goto labels;
    echo $i;
    echo "<br/>";
}
labels:
echo "hello";
?>
