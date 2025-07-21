
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
            <li><a href="listUser">Utilisateurs</a></li>
            <li><a href="<?= HOST ?>fournisseur/listFournisseur">Fournisseurs</a></li>
            <li><a href="<?= HOST ?>emplacement/listEmplacement">Emplacements</a></li>
            <li><a href="<?= HOST ?>stock/listStock">Stock</a></li>
            <li><a href="requeteur.php">Requêteur</a></li>
        </ul>
    </div>
    
    <div class="contenu_resultat">
        <form action="buttonUser" method="post">
            <div class="contenu_bouton">
                <button type="submit" name="btnResearchUser" class="btn">Rechercher</button>
                <button type="submit" name="btnAddUser" class="btn">Ajouter</button>
            </div>
        </form>

        <div class="contenu_resultat_utilisateur">
            <form action="storeUser" method="POST" >
                <div>
                    <label for="">Name</label>
                    <input type="text" name = "name_user">
                </div>   
                <div>
                    <label for="">Email</label>
                    <input type="text" name = "email_user">
                </div>    
                <div>
                    <label for="">Adress</label>
                    <input type="text" name = "adress_user">
                </div> 
                <div>
                    <label for="">Phone</label>
                    <input type="text" name = "phone_user">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" name="pwd_user">
                </div>
                <div>
                    <label for="">Role</label><br>
                    <select name="role_user" required>
                        <option value="utilisateur">Utilisateur</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <button type="submit">Create</button>
                
            </form>

        </div>
    </div>
        

</body>
</html>