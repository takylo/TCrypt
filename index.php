
<!doctype html>
<html lang="fr">
<head>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<meta charset="utf-8">
	<title> TCrypt | TCrypt.tk </title>
</head>
<body>
	

	<?php include 'config/db.php' ?>


	<?php  
	include 'inc/navbar.php';
	if(empty($_GET['page']))
		$_GET['page'] = 'home';	
	if(!file_exists("pages/".$_GET["page"].".php")) 
		$_GET["page"]="404";
	$urlInclusion = 'pages/'.$_GET['page'].'.php';
	include $urlInclusion;
	?>
</body>
</html>
