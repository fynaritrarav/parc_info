
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
            <li><a href="<?= HOST ?>logiciel/listLogiciel">Logiciels</a></li>
            <li><a href="listPeripherique">Périphériques</a></li>
            <li><a href="<?= HOST ?>user/listUser">Utilisateurs</a></li>
            <li><a href="<?= HOST ?>fournisseur/listFournisseur">Fournisseurs</a></li>
            <li><a href="<?= HOST ?>emplacement/listEmplacement">Emplacements</a></li>
            <li><a href="<?= HOST ?>stock/listStock">Stock</a></li>
            <li><a href="requeteur.php">Requêteur</a></li>
        </ul>
    </div>
    
    <div class="contenu_resultat">
        <form action="buttonPeripherique" method="post">
            <div class="contenu_bouton">
                <button type="submit" name="btnResearchPeripherique" class="btn">Rechercher</button>
                <button type="submit" name="btnAddPeripherique" class="btn">Ajouter</button>
            </div>
        </form>

        <div class="contenu_resultat_utilisateur">
            <form action="storePeripherique" method="POST" >
                <div>
                    <label for="">Nom</label>
                    <input type="text" name = "nom_peripherique" required>
                </div>  
                <div>
                    <label for="">Utilisateur :</label><br>
                    <select  name="utilisateur_peripherique" required>
                        <option value="">-- Choisir un utilisateur --</option>
                        <?php foreach($machines as $machine): ?>
                        <option value="<?= htmlspecialchars($machine['id_machine']) ?>">
                            <?= htmlspecialchars($machine['nom_machine']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="">Fournisseur:</label><br>
                    <select  name="fournisseur_peripherique" required>
                        <option value="">-- Choisir un fournisseur --</option>
                        <?php foreach($fournisseurs as $fournisseur): ?>
                        <option value="<?= htmlspecialchars($fournisseur['id_fournisseur']) ?>">
                            <?= htmlspecialchars($fournisseur['name_fournisseur']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div> 
                <div>
                    <label for="">Fabricant</label>
                    <input type="text" name = "fabricant_peripherique" required>
                </div>    
                <div>
                    <label for="">Modele</label>
                    <input type="text" name = "modele_peripherique" required>
                </div> 
                <div>
                    <label for="">Numero série</label>
                    <input type="text" name = "numero_serie" required>
                </div>

                <div>
                    <label for="">Intervention</label>
                    <input type="text" name = "intervention_peripherique" required>
                </div>
                <div>
                    <label for="">Emplacement:</label><br>
                    <select  name="emplacement_peripherique" required>
                        <option value="">-- Choisir un emplacement --</option>
                        <?php foreach($emplacements as $emplacement): ?>
                        <option value="<?= htmlspecialchars($emplacement['id_emplacement']) ?>">
                            <?= htmlspecialchars($emplacement['nom_emplacement']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit">Ajouter</button>
                
            </form>

        </div>
    </div>
        

</body>
</html>