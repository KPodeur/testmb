<!DOCTYPE>
<html>
    <head>
    	<link rel="stylesheet" href="style.admin.css">
</br>
        <title>CRUD PHP Cake</title>
    </head>

    <body>
    
   <?php
        include 'mesfonctionssqlcake.php';
        include 'mesFunctionsTableCake.php';

        $headers = getHeaderTable();
        $cake = getAllCake();
        afficherTableau($cake, $headers);
    ?>
    

    <a href=formulaireCake.php?id=0>Creer un cake</a> 
    </body>
</html>