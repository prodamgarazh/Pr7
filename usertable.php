<?php
echo '<head>
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
<table>';
if (file_exists('database/users.csv')) {
	$fp = fopen('database/users.csv', 'r+');
	$str = file_get_contents('database/users.csv');
	//echo $str;
	$users = explode("\n", $str);
	for($i = 0; $i < count($users)-1; ++$i)
	{
		$user = $users[$i];
		echo '<tr> <td>'. explode(",", $user)[0]. '</td> <td>'. explode(",", $user)[1]. '</td>'. '<td>'. explode(",", $user)[2]. '</td>';
		if(explode(",", $user)[3] == NULL)
		{
			echo '<td><img src="https://www.fillmurray.com/32/32"></td>';
		} else {
			echo '<td><img src='. explode(",", $user)[3]. ' height="32"></td>';
		}
		echo '</tr>';
	}
	
}
echo '</table>
<hr>
   <a class="btn" href="adduser.php">return back</a>
</div>
</body>';
//$user;

?>