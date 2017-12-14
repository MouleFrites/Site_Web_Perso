<?php 
	if (isset($_POST['pseudo'])) {
		$pseudo = $_POST['pseudo'];
		$email = $_POST['email'];
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		
		$bdd = new mysqli("localhost", "dns", "dns", "DNS");
		$bdd->set_charset("utf8");
	
		$resultat = $bdd->query("SELECT COUNT(ID) FROM utilisateurs WHERE pseudo='".$pseudo."'");
		$liste = mysqli_fetch_row($resultat);
		$nombre_de_resultat = $liste[0];
		
		if ($nombre_de_resultat == 0) {
			$validation = true;
		}else{
			$validation = false;
			echo ('Ce pseudo est déjà utilisé');
		}
    	if ($validation){  
    		$resultat = $bdd->query("SELECT COUNT(ID) FROM utilisateurs WHERE email='".$email."'");
			$liste = mysqli_fetch_row($resultat);
			$nombre_de_resultat2 = $liste[0];
			
			if ($nombre_de_resultat2 == 0) {
				$validation = true;
			}else{
				$validation = false;
				echo ('Cet email est déjà utilisé');
			}
			if ($validation == true) {
				$pass1 = $_POST["pass1"];
				$pass2 = $_POST["pass2"];
					if ($pass1 == $pass2) {
					$validation2 = true;
				} else {
					echo ('Les mots de passes ne correspondes pas');
					$validation2 = false;
			}}
			if ($validation2 == true) {
				header("Location: ../html/ConfirmationInscription.php");
				$date = date("d/m/Y");
				$pass = hash('sha512', $pass1); 
			 	$bdd->query("INSERT INTO utilisateurs(pseudo, email, IP, date_inscription, password ) VALUES ('".$pseudo."', '".$email."', '".$IP."', '".$date."', '".$pass."')");
    	
			}
    	}
	}
    
?>
