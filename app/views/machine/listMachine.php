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

            <table border="1">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Utilisateur</th>
                        <th>Fournisseur</th>
                        <th>Fabricant</th>
                        <th>Modèle</th>
                        <th>Numéro de série</th>
                        <th>Intervention</th>
                        <th>Emplacement</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($machines)): ?>
                        <?php foreach ($machines as $machine): ?>
                            <tr>
                                <td><?= htmlspecialchars($machine['id_machine']) ?></td>
                                <td><?= htmlspecialchars($machine['nom_machine']) ?></td>
                                <td><?= htmlspecialchars($machine['name_user']) ?></td>
                                <td><?= htmlspecialchars($machine['name_fournisseur']) ?></td>
                                <td><?= htmlspecialchars($machine['fabricant_machine']) ?></td>
                                <td><?= htmlspecialchars($machine['modele_machine']) ?></td>
                                <td><?= htmlspecialchars($machine['num_serie']) ?></td>
                                <td><?= htmlspecialchars($machine['intervention_machine']) ?></td>
                                <td><?= htmlspecialchars($machine['emplacement_machine']) ?></td>
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