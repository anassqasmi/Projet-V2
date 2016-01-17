<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
?>

<?php

include ("../DAO/FileAccess.php");

function test($mon1, $mon2){
	if(strcmp($mon1,$mon2) == 0)
		return true;
	return false;
}

//require 'DAO/FileAccess.php';

function login($login, $passwd) {
	if (connectUser ( $login, $passwd ) == 1) {
		if ($_SESSION ['utype'] == "admin") {
			echo '<script type="text/javascript">'
				, 'document.location.replace("../View/Accueil.php");'
				, '</script>';
			return 'ok';
		}else {
			echo '<script type="text/javascript">'
						, 'document.location.replace("../View/espaceEtudiant.php");'
						, '</script>';
			return 'ok';
		}
	} else {
		echo '<script type="text/javascript">', 'document.location.replace("../Index.php?form=login passe incorrect");', '</script>';
		return 'notOk';
		exit ();
	}
}
?>