<?php
	$mail = $_POST['e-mail'];
	$subjet = $_POST['sujet'];
	$demand = $_POST['demande'];
	$to = 'xid_ensisa_reparation@googlegroups.com';
	$server = substr($mail, -6);
	
	if($server == "uha.fr")
	{
		if(mail($to, $subject, $demand))
		{
			header('index.html');
		}
	}
	else
	{
		echo "<h1>Veuillez mettre une adresse valide !</h1>";
		?> <a href="index.html">retour à la page d'accueil</a>
<?php
	}
?>
