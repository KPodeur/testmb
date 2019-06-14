<?php
	include 'mesfonctionssqlcake.php';
	include 'mesFunctionsTableCake.php';
	
	$id = $_GET["id"];
	if ($id == 0) {
		$cake = getNewCake();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$cake = readCake($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}
?>

<html>
<header>
	<link rel="stylesheet" href="../style.admin.css">
</header>
<body>

		
	<form action="createUpdateCake.php" method="get">
	<p>	
		<a href="index.php">Liste des Cake</a>

		<input type="hidden" name="id" value="<?php echo $cake['id'];  ?>"/>
		<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
		 <div>
        	<label for="name">Nom du cake :</label>
        	<input type="text" id="nomcake" name="nomcake" value="<?php echo $cake['nomcake'];  ?>">
	    </div>
	    <div>
	        <label for="description">Description</label>
	        <textarea type="text" id="description" name="description" value="<?php echo $cake['description'];  ?>"></textarea>
	    </div>
	    <div>
	        <label for="montant">Montant:</label>
	        <input type="number" id="montant" name="montant" value="<?php echo $cake['montant'];  ?>">
	    </div>
		<div class="button">
			<button type="submit"><?php echo $libelle;  ?></button>
		</div>
	</p>
	</form>
	<br>

	<?php if ($action!="CREATE") { ?>
	<form action="createUpdateCake.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $cake['id'];  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } ?>

</body>
</html>