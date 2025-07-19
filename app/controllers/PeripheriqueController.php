<?php

class PeripheriqueController extends Controller {
    public function addPeripherique() {

        $utilisateurModel = new User();
        $fournisseurModel = new Fournisseur();
        $emplacementModel = new Emplacement();

        $utilisateurs = $utilisateurModel->findAll();
        $fournisseurs = $fournisseurModel->findAll();
        $emplacements = $emplacementModel->findAll();

        return $this->render('peripherique/addPeripherique', [
            'utilisateurs' => $utilisateurs,
            'fournisseurs' => $fournisseurs,
            'emplacements' => $emplacements
        ]);
    }

    public function storePeripherique() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $peripherique = new Peripherique();

            $peripherique->setNom($_POST['nom_peripherique']);
            $peripherique->setUtilisateur($_POST['utilisateur_peripherique']);
            $peripherique->setFournisseur($_POST['fournisseur_peripherique']);
            $peripherique->setFabricant($_POST['fabricant_peripherique']);
            $peripherique->setModele($_POST['modele_peripherique']);
            $peripherique->setNumSerie($_POST['numero_serie']);

            if ($peripherique->add()) {
                header('Location: listPeripherique');
                exit;
            } else {
                echo "Erreur lors de la création";
            }
        }
    }

    public function listPeripherique() {

        $peripheriqueModel = new Peripherique();
        
        $peripheriques = $peripheriqueModel->findAll_Name();

        return $this->render('peripherique/listPeripherique', ['peripheriques' => $peripheriques]);
    }

    public function researchPeripherique() {

        return $this->render('peripherique/researchPeripherique');
    }

    public function buttonPeripherique() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['btnResearchPeripherique'])) {
                header('Location: researchPeripherique');
            } else if (isset($_POST['btnAddPeripherique'])) {
                header('Location: addPeripherique');
            } else {
                echo "Aucun bouton cliquer";
            }
        }
    }
}