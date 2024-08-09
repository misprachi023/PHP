<?php
// print_r($_POST);
if($_POST){
    echo "user name is " .$_POST['user_name'];
    echo "<br/>";
    echo "password is " .$_POST['user_password'];
    echo "<br/>";
    echo "email is " .$_POST['user_email'];

}
?>