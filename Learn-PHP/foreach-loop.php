<?php
$users=["prachi", 78, "mishra", "abc", "jhon"];
// foreach($users as $x){
//     echo $x;
//     echo "<br/>";
// }


// foreach($users as $x):
//     echo $x;
//     echo "<br/>";
// endforeach;


foreach($users as $x){
    if($x=="abc"){
        continue;
    }
    // if($x=="mishra"){
    //     break;
    // }
    echo "<h1 style='color:red'> $x </h1>";
    echo "<br/>";
}
?>