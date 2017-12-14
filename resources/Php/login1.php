<?php
	session_start();

	if (isset($_POST['pseudo'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		$pseudo = $_POST['pseudo'];
		$pass1 = $_POST['pass1'];
		$pass = hash('sha512', $pass1);

		$bdd = new mysqli("localhost", "root", "Gofuyomobythas!NOWAY!!#bite", "site_web");
		$bdd->set_charset("utf8");

		$resultat = $bdd->query("SELECT COUNT(ID), type FROM utilisateurs WHERE pseudo='".$pseudo."' AND password='".$pass."'");
		$liste = mysqli_fetch_row($resultat);
		$nombre_de_resultat = $liste[0];

		if ($nombre_de_resultat == 1) {
			$authentification = true;
			$_SESSION["pseudo"] = $pseudo;
			$_SESSION["status"] = $liste[1];

			header("Location: ../html/ConfirmationConnexion.php");
		}else{
			$authentification = false;
			echo ('Oh ptn tes pas dans la BDD');
		}
	}


?>
