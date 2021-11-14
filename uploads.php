<?php
//if(isset($_POST["submit"])) 
{
$target_dir = "public/images/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$isUploaded = false;
$filePath = '';
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
   $filePath = $target_dir . basename($_FILES["photo"]["name"]);
   $filePath = filter_var($filePath, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $isUploaded = true;
}
}
?>