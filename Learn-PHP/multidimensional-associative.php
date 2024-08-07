<?php
$users=[
    ["name"=>"prachi", "age"=>20, "city"=>"bhopal", "country"=>"india"],
    ["name"=>"prachi", "age"=>20, "city"=>"bhopal", "country"=>"india"],
    ["name"=>"prachi", "age"=>20, "city"=>"bhopal", "country"=>"india"],
    ["name"=>"prachi", "age"=>20, "city"=>"bhopal", "country"=>"india"]
];
echo "<table border=1>";
foreach($users as $user){
    echo "<tr>";
   foreach($user as $key=>$data){
    echo "<td>";
    echo "<h1 style='color:red'>" .$key. ":" . $data . "</h1>"
    ;}
    echo "</td>";
    echo "</tr>";
   }

echo "</table>";
?>