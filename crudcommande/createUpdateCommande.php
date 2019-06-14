<?php
	include 'mesfonctionssqlcommande.php';
	include 'mesFunctionsTableCommande.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$user = $_GET["user"];
		$date = $_GET["date"];
		$n_commande = $_GET["n_commande"];
		$montant = $_GET["montant"];
		$statut = $_GET["statut"];
		
	}
	

	if ($action == "CREATE") {
		createCommande($id, $user, $date, $n_commande, $montant, $statut);

		echo "commande cree <br>";
		echo "<a href='index.php'>Liste des Commandes</a>";
		
	}
	
	if ($action == "UPDATE") {
		updateCake($id, $date, $n_commande, $montant, $statut );
		echo "commande update <br>";
		echo "<a href='index.php'>Liste des Commandes</a>";
	}
	if ($action == "DELETE") {
		deleteCake($id);
		echo "commande delete <br>";
		echo "<a href='index.php'>Liste des Commandes</a>";
	}
	

	
?>