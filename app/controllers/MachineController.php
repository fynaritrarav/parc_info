<?php

class MachineController extends Controller{
    public function addMachine() {

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

    public function storeMachine(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $machine = new Machine();

            $machine->setNom($_POST['nom_machine']);
            $machine->setUtilisateur((int)$_POST['utilisateur_machine']);
            $machine->setFournisseur((int)$_POST['fournisseur_machine']);
            $machine->setFabricant($_POST['fabricant_machine']);
            $machine->setModele($_POST['modele_machine']);
            $machine->setNumSerie($_POST['num_serie']);
            $machine->setIntervention($_POST['intervention_machine']);
            $machine->setEmplacement((int)$_POST['emplacement_machine']);

            if ($machine->add()) {
                header('Location: listMachine');
                exit;
            }else {
                echo "Erreur lors de la création";
            }
        }

    }

    public function listMachine(){
        
        $machineModel = new Machine();

        $machines = $machineModel->findAll_Name();

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

