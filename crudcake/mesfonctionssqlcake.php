<?php
function getDatabaseConnexion(){
try {
	    $user = "root";
		$pass = "";
		$pdo = new PDO('mysql:host=localhost;dbname=mb', $user, $pass);
		 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
		
	} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	    die();
	}
}


// Recupérer tout les cakes
function getAllCake(){
	$con = getDatabaseConnexion();
	$requete = 'SELECT * from cake';
	$rows = $con->query($requete);
	return $rows;
}
// Créer un cake
function createCake($nomcake, $description, $montant){
	try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO cake (nomcake, description, montant) 
					VALUES ('$nomcake', '$description', '$montant')";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}
	

//Recupérer un cake
function readCake($id){
		$con = getDatabaseConnexion(); //comme connexion
		$requete = "SELECT * from cake where id = '$id' ";
		$stmt = $con->query($requete); // statement 1 query 2 fetchAll
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}

}
// Mettre à jour Cake
function updateCake($id, $nomcake, $description, $montant){
	try {
			$con = getDatabaseConnexion(); //comme connexion
			$requete = "UPDATE cake set 
						nomcake = '$nomcake',
						description = '$description',
						montant = '$montant'
						where id = '$id' ";
	// Prepare statement
    $stmt = $con->prepare($requete);

    // execute the query
    $stmt->execute();
		}
	    catch(PDOException $e) {
	    	echo $requete . "<br>" . $e->getMessage();
	    }
	}

// Supprimer Cake
function deleteCake($id){
try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from cake where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $requete . "<br>" . $e->getMessage();
	    }
}
function getNewCake() {
		$cake['id'] = "";
		$cake['nomcake'] = "";
		$cake['description'] = "";
		$cake['montant'] = "";
		
	}
?>