
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
            <li><a href="<?= HOST ?>machine/listMachine">Machines</a></li>
            <li><a href="listLogiciel">Logiciels</a></li>
            <li><a href="<?= HOST ?>peripherique/listPeripherique">Périphériques</a></li>
            <li><a href="<?= HOST ?>user/listUser">Utilisateurs</a></li>
            <li><a href="<?= HOST ?>fournisseur/listFournisseur">Fournisseurs</a></li>
            <li><a href="<?= HOST ?>emplacement/listEmplacement">Emplacements</a></li>
            <li><a href="<?= HOST ?>stock/listStock">Stock</a></li>
            <li><a href="requeteur.php">Requêteur</a></li>
        </ul>
    </div>
    
    <div class="contenu_resultat">
        <form action="buttonLogiciel" method="post">
            <div class="contenu_bouton">
                <button type="submit" name="btnResearchLogiciel" class="btn">Rechercher</button>
                <button type="submit" name="btnAddLogiciel" class="btn">Ajouter</button>
            </div>
        </form>

        <div class="contenu_resultat_utilisateur">
            <form action="storeLogiciel" method="POST" >
                <div>
                    <label for="">Nom</label>
                    <input type="text" name = "nom_logiciel">
                </div>   
                <div>
                    <label for="">Description</label>
                    <input type="text" name = "description_logiciel">
                </div>    
                <div>
                    <label for="">Editeur</label>
                    <input type="text" name = "editeur_logiciel">
                </div> 
                <div>
                    <label for="">Version</label>
                    <input type="text" name = "version_logiciel">
                </div>
                <div>
                    <label for="">Type</label>
                    <input type="text" name = "type_logiciel">
                </div>
                <div>
                    <label for="">Machine</label>
                    <select name="machine_logiciel" required>
                        <option value="">--Choisir une machine--</option>
                        <?php foreach ($machines as $machine): ?>
                            <option value="<?= htmlspecialchars($machine['id_machine']) ?>">
                                <?= htmlspecialchars($machine['nom_machine']) ?>
                            </option>
                        <?php endforeach ?>                                                    
                    </select>
                </div>

                <button type="submit">Create</button>
                
            </form>

        </div>
    </div>
        

</body>
</html>