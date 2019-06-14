<?php
	include 'mesfonctionssqlcake.php';
	include 'mesFunctionsTableCake.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$nomcake = $_GET["nomcake"];
		$description = $_GET["description"];
		$montant = $_GET["montant"];
		
	}
	

	if ($action == "CREATE") {
		createCake($nomcake, $description, $montant);

		echo "cake cree <br>";
		echo "<a href='index.php'>Liste des Cakes</a>";
		
	}
	
	if ($action == "UPDATE") {
		updateCake($id, $nomcake, $description, $montant);
		echo "cake update <br>";
		echo "<a href='index.php'>Liste des Cakes</a>";
	}
	if ($action == "DELETE") {
		deleteCake($id);
		echo "cake delete <br>";
		echo "<a href='index.php'>Liste des Cakes</a>";
	}
	

	
?>