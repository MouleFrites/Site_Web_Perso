<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="./resources/Css/styles.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="./resources/Js/scripts.js"> </script>
	<script type="text/javascript" src="./resources/Js/sha.js"> </script>
	<title> Titre </title>
</head>
<body>
	<div id="page">
		<div id="connexion" onclick="test()">
		</div>
		<?php if($_SESSION["type"]=="admin"){
		 ?>
		 <div id="hash" onclick="hash()">
		 </div>
		<div id="entete">
			<img src="./resources/Img/construction1.jpg" />
		</div>
	<?php } ?>
	</div>

</body>
</html>
