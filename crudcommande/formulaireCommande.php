<?php
	include 'mesfonctionssqlcommande.php';
	include 'mesFunctionsTableCommande.php';
	
	$id = $_GET["id"];
	if ($id == 0) {
		$commande = getNewCommande();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$commande = readCommande($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}
?>

<html>
<header>
	<link rel="stylesheet" href="../style.admin.css">
</header>
<body>

		
	<form action="createUpdateCommande.php" method="get">
	<p>	
		<a href="index.php">Liste des Commandes</a>

		<input type="hidden" name="id" value="<?php echo $commande['id'];  ?>"/>
		<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
		 <div>
        	<label for="name">Nom de l'utilisateur :</label>
        	<input type="text" id="usersite" name="usersite" value="<?php echo $commande['usersite'];  ?>">
	    </div>
	    <div>
	        <label for="datecommande">Date :</label>
	        <input type="date" id="datecommande" name="datecommande" value="<?php echo $commande['datecommande'];  ?>"></input>
	    </div>
	    <div>
	        <label for="n_commande">Numéro de commande:</label>
	        <input type="number" id="n_commande" name="n_commande" value="<?php echo $commande['n_commande'];  ?>">
	    </div>
	    <div>
        	<label for="montant">Montant :</label>
        	<input type="number" id="montant" name="montant" value="<?php echo $commande['montant'];  ?>">
	    </div>
	     <div>
        	<label for="statut">Statut :</label>
        	<input type="text" id="statut" name="statut" value="<?php echo $commande['statut'];  ?>">
	    </div>
		<div class="button">
			<button type="submit"><?php echo $libelle; ?></button>
		</div>
	</p>
	</form>
	<br>

	<?php if ($action!="CREATE") { ?>
	<form action="createUpdateCommande.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $commande['id'];  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } ?>

</body>
</html>