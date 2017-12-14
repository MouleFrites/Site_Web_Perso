<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
  <link rel="stylesheet" href="./resources/Css/styles.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="./resources/Js/scripts.js"> </script>
  <?php
      	require('./resources/Php/login1.php')
      ?>
	<title>Test</title>
</head>
<body>
  <div id="loginform">
    <form method="POST" action="login.php">
		   <input name="pseudo" type="text" placeholder="Pseudo"><br>
		   <input name="pass1" type="text" placeholder="Mot de passe"><br>
       <input type="submit" value="0">
	  </form>
  </div>
</body>
</html>
