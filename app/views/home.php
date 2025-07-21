<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ASSETS ?>css/style.css">
</head>
<body>
    <div class="contenu_header">
        <img src="<?= ASSETS ?>css/logo_onifr.png" alt="error">
        <p>Gestion du parc informatique du SIP</p>
    </div>
    <div class="contenu_menu">
        <p>Machines</p>
        <ul class = "menu">
            <li><a href="machine/listMachine">Machines</a></li>
            <li><a href="logiciel/listLogiciel">Logiciels</a></li>
            <li><a href="peripherique/listPeripherique">Périphériques</a></li>
            <li><a href="user/listUser">Utilisateurs</a></li>
            <li><a href="fournisseur/listFournisseur">Fournisseurs</a></li>
            <li><a href="emplacement/listEmplacement">Emplacements</a></li>
            <li><a href="stock/listStock">Stock</a></li>
            <li><a href="requeteur.php">Requêteur</a></li>
        </ul>
    </div>
    
    <div class="contenu_resultat_utilisateur">
        <form action="">
            <div class="contenu_bouton">
                <button type="submit" class="btn">Rechercher</button>
                <button type="submit" class="btn">Ajouter</button>
            </div>
        </form>
        
        <div>

        </div>
    </div>
        
</body>
</html
