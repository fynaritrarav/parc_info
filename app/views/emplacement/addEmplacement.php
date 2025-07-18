
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
            <li><a href="machines.php">Machines</a></li>
            <li><a href="logiciels.php">Logiciels</a></li>
            <li><a href="peripheriques.php">Périphériques</a></li>
            <li><a href="listUser">Utilisateurs</a></li>
            <li><a href="fournisseurs.php">Fournisseurs</a></li>
            <li><a href="emplacements.php">Emplacements</a></li>
            <li><a href="stock.php">Stock</a></li>
            <li><a href="requeteur.php">Requêteur</a></li>
        </ul>
    </div>
    
    <div class="contenu_resultat">
        <form action="buttonUser" method="post">
            <div class="contenu_bouton">
                <button type="submit" name="btnResearchUser" class="btn">Rechercher</button>
                <button type="submit" name="btnAddUser" btnAddUser class="btn">Ajouter</button>
            </div>
        </form>

        <div class="contenu_resultat_utilisateur">
            <form action="storeEmplacement" method="POST" >
                <div>
                    <label for="">Nom</label>
                    <input type="text" name = "nom_emplacement">
                </div>   
                <div>
                    <label for="">Description</label>
                    <input type="text" name = "description_emplacement">
                </div>    
                <div>
                    <label for="">Chemin</label>
                    <input type="text" name = "chemin_emplacement">
                </div> 

                <button type="submit">Ajouter</button>
                
            </form>

        </div>
    </div>
        

</body>
</html>