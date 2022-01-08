<?php
include ('includes/connect.php');
if(isset($_GET['page'])){
	$page = $_GET['page'];
	$title = ucwords(str_replace('.php','',$page));
}else{
	$page = "home";
	$title = ucwords('home');
}
switch($page){
	case 'home':
		$page = "home.php";
	break;
	case 'registration':
		$page = "registration.php";
	break;
	default:
		$page = "home.php";
	break;
}
		$title = ucwords(str_replace('.php','',$page));
	


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Peniel Software - <?=$title?></title>
<link rel="stylesheet" href="css/material.min.css">
<script src="js/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
.demo-card-square.mdl-card {
  width: 100%;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>
</head>
<body>
<?php include($page); ?>

</body>
</html>