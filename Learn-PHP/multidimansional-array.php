<?php
$users =[
    ["prachi", 78, "mishra", "abc", "jhon"],
    ["prachi", 78, "mishra", "abc", "jhon"],
    ["prachi", 78, "mishra", "abc", "jhon"]
];
// echo "<pre/>";
// print_r($users);


for($i=0; $i<count($users); $i++){
    for($j=0; $j<count($users[$i]); $j++){
        echo $users[$i][$j];
        echo "<br/>";
    }
}
    

// foreach($users as $user):
//     print_r($user);
//     echo "<br/>";
// endforeach
?>