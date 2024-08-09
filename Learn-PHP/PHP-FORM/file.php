<?php
print_r($_FILES);
if($_FILES['file']){
$path= $_FILES['file']['name'];
$upload_path= "./upload/" . $path;
move_uploaded_file($_FILES['file']['tmp_name'], $upload_path) || die("upload failed");
}else{
    die("no file found");
}
?>