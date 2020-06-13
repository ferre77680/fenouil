<?php
include("connect.php");
if($_POST['type']=='Admin'){
if(isset($_POST['email'])&& isset($_POST['mdp']))
{
$req= "SELECT id, nom, prenom, mail, id_role FROM users where mail=:email and mdp=:mdp";
$stm=$dbh->prepare($req);


$bool=$stm->execute(array(':email'=>$_POST['email'],':mdp'=>$_POST['mdp']));
$user = $stm->fetch(PDO::FETCH_ASSOC);
if (!empty($user)){
	if($user['id_role'] == 1)
	{
		//demarrer la sesion
		session_start();
		//creation de la clé admin dans le tableau  $_SESSION
		$_SESSION['Prospection']=$user;
		//redirect vers une page
		header("Location:index.php");

	}elseif($user['id_role'] == 2) {
			session_start();
			$_SESSION['Directeur Strategique']=$user;
			header("Location:index.php");
		}

		elseif($user['id_role'] == 3) {
				session_start();
				$_SESSION['Assistants de saisie']=$user;
				header("Location:index.php");
		}

		elseif($user['id_role'] == 4) {
				session_start();
				$_SESSION['Gestionnaire administratif']=$user;
				header("Location:index.php");
		}

		else {
				session_start();
				$_SESSION['Responsable de donnee']=$user;
				header("Location:index.php");
		}
}

}else echo "pas submit";

}
else {
	$req= "SELECT id, nom, prenom, adresse, socio, mail, telephone, caract FROM client where mail=:email and mdp=:mdp";
	$stm=$dbh->prepare($req);
	$bool=$stm->execute(array(':email'=>$_POST['email'],':mdp'=>$_POST['mdp']));
	$user = $stm->fetch(PDO::FETCH_ASSOC);
	if(!empty($user)){
		session_start();
		$_SESSION['Client']=$user;
		header("Location:index.php");
	}
	else echo "pas submit";
}
 ?>
