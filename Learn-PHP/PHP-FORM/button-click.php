<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Call php function</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value="btn1">Call function</button>
    </form>
    
</body>
</html>

<?php
if(isset($_REQUEST['button'])){
    btn_click_test();
}
function btn_click_test(){
    echo "function called or btn click";
}
?>