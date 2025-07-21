
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
            <li><a href="listMachine">Machines</a></li>
            <li><a href="<?= HOST ?>logiciel/listLogiciel">Logiciels</a></li>
            <li><a href="<?= HOST ?>peripherique/listPeripherique">Périphériques</a></li>
            <li><a href="<?= HOST ?>user/listUser">Utilisateurs</a></li>
            <li><a href="<?= HOST ?>fournisseur/listFournisseur">Fournisseurs</a></li>
            <li><a href="<?= HOST ?>emplacement/listEmplacement">Emplacements</a></li>
            <li><a href="<?= HOST ?>stock/listStock">Stock</a></li>
            <li><a href="requeteur.php">Requêteur</a></li>
        </ul>
    </div>
    
    <div class="contenu_resultat">
        <form action="buttonMachine" method="post">
            <div class="contenu_bouton">
                <button type="submit" name="btnResearchMachine" class="btn">Rechercher</button>
                <button type="submit" name="btnAddMachine" class="btn">Ajouter</button>
            </div>
        </form>

        <div class="contenu_resultat_utilisateur">
            <form action="storeMachine" method="POST" >
                <div>
                    <label for="">Nom</label>
                    <input type="text" name = "nom_machine">
                </div>  
                <div>
                    <label for="">Utilisateur :</label><br>
                    <select  name="utilisateur_machine" required>
                        <option value="">-- Choisir un utilisateur --</option>
                        <?php foreach($utilisateurs as $utilisateur): ?>
                            <option value="<?= htmlspecialchars($utilisateur['id_user']) ?>">
                                <?= htmlspecialchars($utilisateur['name_user']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="">Fournisseur:</label><br>
                    <select  name="fournisseur_machine" required>
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
                    <input type="text" name = "fabricant_machine">
                </div>    
                <div>
                    <label for="">Modele</label>
                    <input type="text" name = "modele_machine">
                </div> 
                <div>
                    <label for="">Numero série</label>
                    <input type="text" name = "num_serie">
                </div>

                <div>
                    <label for="">Intervention</label>
                    <input type="text" name = "intervention_machine">
                </div>
                <div>
                    <label for="">Emplacement:</label><br>
                    <select  name="emplacement_machine" required>
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