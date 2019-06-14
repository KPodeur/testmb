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
function getAllCommande(){
	$con = getDatabaseConnexion();
	$requete = 'SELECT * from commande';
	$rows = $con->query($requete);
	return $rows;
}
// Créer un cake
function createCommande($usersite, $datecommande, $n_commande, $montant, $statut){
	try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO commande (usersite, datecommande, n_commande, montant, statut) 
                    VALUES ({$usersite}, '{$datecommande}', {$n_commande}, {$montant}, {$statut})";
	    	var_dump($usersite);
	    	die($usersite);
	    	$con->exec($sql);
	    	

		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}
	

//Recupérer un cake
function readCommande($id){
		$con = getDatabaseConnexion(); //comme connexion
		$requete = "SELECT * from commande where id = '$id' ";
		$stmt = $con->query($requete); // statement 1 query 2 fetchAll
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}

}
// Mettre à jour Cake
function updateCommande($id, $usersite, $datecommande, $n_commande, $montant, $statut){
	try {
			$con = getDatabaseConnexion(); //comme connexion
			$requete = "UPDATE commande set 
						usersite = '$usersite',
						datecommande = '$datecommande',
						n_commande = '$n_commande',
						montant = '$montant',
						statut = '$statut',
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
function deleteCommande($id){
try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from commande where id = '$id'";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $requete . "<br>" . $e->getMessage();
	    }
}
function getNewCommande() {
		$commande['id'] = "";
		$commande['usersite'] = "";
		$commande['datecommande'] = "";
		$commande['n_commande'] = "";
		$commande['montant'] = "";
		$commande['statut'] = "";
		
	}
?>