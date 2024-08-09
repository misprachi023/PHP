<?php
// $user=["name"=>"prachi","age"=>21, "gender"=>"female", "city"=>"bhopal"];

// echo json_encode($user);

$data='{"name":"prachi","age":21,"gender":"female","city":"bhopal"}';
// echo $data;

$user=json_decode($data, true); //if pass true data will be in array format or if true is not pass data will be in object format
print_r($user);
?>