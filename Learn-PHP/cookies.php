<?php

setCookie("name","prachi", time()+(86400));
setcookie("surname", "mishra", time()+(86400));
// print_r($_COOKIE);
if(isset($_COOKIE['name'])){
    echo "name is " .$_COOKIE['name'];
}else{
    echo "name not set";
}

echo "<br/>";

if(isset($_COOKIE['surname'])){
    echo "surname is " .$_COOKIE['surname'];
}else{
    echo "surname not set";
}
?>