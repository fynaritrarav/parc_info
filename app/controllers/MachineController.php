<?php

class MachineController extends Controller{
    private $machine;

    public function __construct(){
        parent::__construct();
        $this->machine = new Machine();
    }
    public function addMachine() {

        if ($_SESSION['user']['role_user'] !== 'admin') {
            echo 'accès refusé';
            return;
        }

        else {
            $userModel = new User();
            $fournisseurModel = new Fournisseur();
            $emplacementModel = new Emplacement();

            $utilisateurs = $userModel->findAll();
            $fournisseurs = $fournisseurModel->findAll();
            $emplacements = $emplacementModel->findAll();


            return $this->render('machine/addMachine', [
                'utilisateurs' => $utilisateurs,
                'fournisseurs' => $fournisseurs,
                'emplacements' => $emplacements
            ]);
        }

        
    }

    public function storeMachine(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // $machine = new Machine();

            $this->machine->setNom($_POST['nom_machine']);
            $this->machine->setUtilisateur((int)$_POST['utilisateur_machine']);
            $this->machine->setFournisseur((int)$_POST['fournisseur_machine']);
            $this->machine->setFabricant($_POST['fabricant_machine']);
            $this->machine->setModele($_POST['modele_machine']);
            $this->machine->setNumSerie($_POST['num_serie']);
            $this->machine->setIntervention($_POST['intervention_machine']);
            $this->machine->setEmplacement((int)$_POST['emplacement_machine']);

            if ($this->machine->add()) {
                header('Location: listMachine');
                exit;
            }else {
                echo "Erreur lors de la création";
            }
        }

    }

    public function listMachine(){
        
        //$machineModel = new Machine();

        $machines = $this->machine->findAll_Name();

        return $this->render('machine/listMachine', ['machines' => $machines]);

    }

    public function researchMachine(){
        return $this->render('machine/researchMachine');
    }

    public function buttonMachine(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['btnResearchMachine'])){
                header('Location: researchMachine');
            }
            else if(isset($_POST['btnAddMachine'])){
                header('Location: addMachine');
            }
            else{
                echo "Aucun bouton cliquer";
            }
        }
    }

}

