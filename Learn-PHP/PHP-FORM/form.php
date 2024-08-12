<?php
// print_r($_POST);
if(isset($_POST['name'])){
    echo "user name is ". $_POST['name'];
    echo "<br/>";
    echo "user email is " .$_POST['email'];
    echo "<br/>";
    echo "password is " .$_POST['password'];
    echo "<br/>";
    echo "your skills is ". implode(", ", $_POST['skills']);
    echo "<br/>";
    echo "gender is " .$_POST['gender'];
    echo "<br/>";
    echo "city is " .$_POST['city'];
    echo "<br/>";
    echo "bio is " .$_POST['bio'];

}
?>