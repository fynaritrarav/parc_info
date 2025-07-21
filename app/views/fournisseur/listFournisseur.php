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
            <li><a href="<?= HOST ?>peripherique/listPeripherique">Périphériques</a></li>
            <li><a href="<?= HOST ?>user/listUser">Utilisateurs</a></li>
            <li><a href="listFournisseur">Fournisseurs</a></li>
            <li><a href="<?= HOST ?>emplacement/listEmplacement">Emplacements</a></li>
            <li><a href="<?= HOST ?>stock/listStock">Stock</a></li>
            <li><a href="requeteur.php">Requêteur</a></li>
        </ul>
    </div>
    
    <div class="contenu_resultat">
        <form action="buttonFournisseur" method="post">
            <div class="contenu_bouton">
                <button type="submit" name="btnResearchFournisseur" class="btn">Rechercher</button>
                <button type="submit" name="btnAddFournisseur" class="btn">Ajouter</button>
            </div>
        </form>
        
        <div class="contenu_resultat_utilisateur">

            <table border="1">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($fournisseurs)): ?>
                        <?php foreach ($fournisseurs as $fournisseur): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($fournisseur['id_fournisseur']) ?></td>
                                <td><?php echo htmlspecialchars($fournisseur['name_fournisseur']) ?></td>
                                <td><?php echo htmlspecialchars($fournisseur['email_fournisseur']) ?></td>
                                <td><?php echo htmlspecialchars($fournisseur['adress_fournisseur']) ?></td>
                                <td><?php echo htmlspecialchars($fournisseur['phone_fournisseur']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="4">Aucun utilisateur trouvé.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>


        </div>
    </div>
           
</body>
</html>