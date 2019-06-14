<!DOCTYPE>
<html>
    <head>
    	<link rel="stylesheet" href="style.admin.css">
</br>
        <title>CRUD PHP Commande</title>
    </head>

    <body>
    
   <?php
        include 'mesfonctionssqlcommande.php';
        include 'mesFunctionsTableCommande.php';
        
        $headers = getHeaderTable();
        $commande = getAllCommande();
        afficherTableau($commande, $headers);
    ?>
    

    <a href=formulaireCommande.php?id=0>Créer une commande</a> 
    </body>
</html>