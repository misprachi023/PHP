<?php
// for($i=0; $i<=10; $i++){
//     echo $i;
//     echo "<br/>";
//    if($i==4){
//     break;
//    }
// }

for($i=0; $i<=10; $i++){
    if($i==5 || $i==7){
        continue;
    }
    echo $i;
    echo "<br/>";
}
?>