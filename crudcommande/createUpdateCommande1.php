<?php
	include 'mesfonctionssqlcommande.php';
	include 'mesFunctionsTableCommande.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$usersite = $_GET["usersite"];
		$datecommande = $_GET["datecommande"];
		$n_commande = $_GET["n_commande"];
		$montant = $_GET["montant"];
		$statut = $_GET["statut"];
		
	}
	

	if ($action == "CREATE") {
		createCommande($usersite, $datecommande, $n_commande, $montant, $statut);

		echo "commande cree <br>";
		echo "<a href='index.php'>Liste des Commandes</a>";
		
	}
	
	if ($action == "UPDATE") {
		updateCake($usersite, $datecommande, $n_commande, $montant, $statut );
		echo "commande update <br>";
		echo "<a href='index.php'>Liste des Commandes</a>";
	}
	if ($action == "DELETE") {
		deleteCake($id);
		echo "commande delete <br>";
		echo "<a href='index.php'>Liste des Commandes</a>";
	}
	

	
?>