<?php

class PeripheriqueController extends Controller {
    private $peripherique;

    public function __construct(){
        parent::__construct();
        $this->peripherique = new Peripherique();
    }
    public function addPeripherique() {

        if ($_SESSION['user']['role_user'] !== 'admin') {
            echo 'accès refusé';
            return;
        }

        $machineModel = new Machine();
        $fournisseurModel = new Fournisseur();
        $emplacementModel = new Emplacement();

        $machines = $machineModel->findAll();
        $fournisseurs = $fournisseurModel->findAll();
        $emplacements = $emplacementModel->findAll();

        return $this->render('peripherique/addPeripherique', [
            'machines' => $machines,
            'fournisseurs' => $fournisseurs,
            'emplacements' => $emplacements
        ]);
    }

    public function storePeripherique() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->peripherique->setNom($_POST['nom_peripherique']);
            $this->peripherique->setUtilisateur($_POST['utilisateur_peripherique']);
            $this->peripherique->setFournisseur($_POST['fournisseur_peripherique']);
            $this->peripherique->setFabricant($_POST['fabricant_peripherique']);
            $this->peripherique->setModele($_POST['modele_peripherique']);
            $this->peripherique->setNumSerie($_POST['numero_serie']);

            if ($this->peripherique->add()) {
                header('Location: listPeripherique');
                exit;
            } else {
                echo "Erreur lors de la création";
            }
        }
    }

    public function listPeripherique() {
        
        $peripheriques = $this->peripherique->findAll_Name();

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