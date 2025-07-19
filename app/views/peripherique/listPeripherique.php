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
        <form action="buttonPeripherique" method="post">
            <div class="contenu_bouton">
                <button type="submit" name="btnResearchPeripherique" class="btn">Rechercher</button>
                <button type="submit" name="btnAddPeripherique" class="btn">Ajouter</button>
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
                    <?php if (!empty($peripheriques)): ?>
                        <?php foreach ($peripheriques as $peripherique): ?>
                            <tr>
                                <td><?= htmlspecialchars($peripherique['id_peripherique']) ?></td>
                                <td><?= htmlspecialchars($peripherique['nom_peripherique']) ?></td>
                                <td><?= htmlspecialchars($peripherique['name_user']) ?></td>
                                <td><?= htmlspecialchars($peripherique['name_fournisseur']) ?></td>
                                <td><?= htmlspecialchars($peripherique['fabricant_peripherique']) ?></td>
                                <td><?= htmlspecialchars($peripherique['modele_peripherique']) ?></td>
                                <td><?= htmlspecialchars($peripherique['numero_serie']) ?></td>
                                <td><?= htmlspecialchars($peripherique['intervention_peripherique']) ?></td>
                                <td><?= htmlspecialchars($peripherique['emplacement_peripherique']) ?></td>
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