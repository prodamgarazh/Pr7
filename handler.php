<?php
if($_POST["name"] != NULL && $_POST["email"] != NULL && $_POST["gender"] != NULL){
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = $_POST["email"];
$gender = $_POST["gender"];
   if($_POST["name"] != NULL && $_POST["email"] != NULL && $_POST["gender"] != NULL){
	   include 'uploads.php';
   filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	if (!file_exists('database/users.csv')) {
   file_put_contents('database/users.csv', "$name,$email,$gender,$filePath\n");
} else {
$fp = fopen('database/users.csv', 'a');
fwrite($fp, "$name,$email,$gender,$filePath\n");
fclose($fp);
}
   }
}
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 400px;
       }
   </style>
</head>
<body style="padding-top: 3rem;">
 
<div class="container">
<?php
if($_POST["name"] == NULL || $_POST["email"] == NULL || $_POST["gender"] == NULL)
{
	echo '<span style="color:red">Invalid data</span>';
} else {
echo 'User Added '. $_POST["name"]. '<br>Email '. $_POST["email"]. '<br>Gender '. $_POST["gender"];
if($filePath != "")
{
echo '<br><img src='. $filePath. ' height="32">';
} else {
	echo '<br><img src="https://www.fillmurray.com/32/32">';
}
}
?>
   <hr>
   <a class="btn" href="adduser.php">return back</a>
   <a class="btn" href="usertable.php">view list</a>
</div>
</body>
</html>

<?php



?>