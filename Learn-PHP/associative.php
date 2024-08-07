<?php
$users=[
    "name"=>"prachi",
    "age"=>20,
    "city"=>"bhopal",
    "country"=>"india"
];
foreach($users as $key => $data):
    echo "<h1 style='color:red'>" .$key. " is :" . $data . "</h1>";
    // echo "<br/>";
endforeach

?>