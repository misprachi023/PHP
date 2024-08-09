<?php
$path="files";
$items=scandir($path);
$items= array_diff($items, array('.','..')); //1st element is . and 2nd element is .. so first element is removed by second element
// print_r($items);

foreach($items as $item){
    echo "<a href='$path/$item'>$item</a>"; 
    echo "<br/>";
}
?>