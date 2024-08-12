<?php
$user=["aman", "abhishek", "prachi", "abc", "abhishek", "prachi"];
$users=["name"=>"prachi", "age"=>20, "city"=>"bhopal", "country"=>"india"];
if(is_array($user)){
    echo "it is an array";
}else{
    echo "it is not an array";
}
// echo count($user);
echo "<br/>";
// unset($user[1]); //delete element
// array_push($user, "pratik"); //add elemet
// array_pop($user);
// array_pop($user); //remove element
// print_r($user);
// print_r(array_keys($users));
// echo implode($user); //array convert into string
// $str="prachi mishra";
// print_r(explode("a", $str)); //string convert into array

// print_r(array_merge($user, $users)); //merage array
print_r(array_unique($user));//remove duplicate
?>