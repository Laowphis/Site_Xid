<?php
	$mail = $_POST['e-mail'];
	$subjet = $_POST['sujet'];
	$demand = $_POST['demande'];
	$to = 'xid_ensisa_reparation@googlegroups.com';
	
	if(mail($to, $subject, $demand))
	{
		header('index.html');
	}
?>
