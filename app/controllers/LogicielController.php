<?php

class LogicielController extends Controller{

    public function addLogiciel(){

        $machineModel = new Machine();

        $machines = $machineModel->findAll();

        return $this->render('logiciel/addLogiciel', ['machines' => $machines]);

    }

    public function storeLogiciel(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $logiciel = new Logiciel();

            $logiciel->setNom($_POST['nom_logiciel']);
            $logiciel->setDescription($_POST['description_logiciel']);
            $logiciel->setEditeur($_POST['editeur_logiciel']);
            $logiciel->setVersion($_POST['version_logiciel']);
            $logiciel->setType($_POST['type_logiciel']);
            $logiciel->setMachine((int)$_POST['machine_logiciel']);

            if ($logiciel->add()) {
                header('Location: listLogiciel');
                exit;
            }
            else {
                echo "Erreur lors de l'ajout";
            }
        }

    }

    public function listLogiciel(){

        $logicielModel = new Logiciel();

        $logiciels = $logicielModel->findAll_Name();

        return $this->render('logiciel/listLogiciel', ['logiciels' => $logiciels]);

    }

    public function researchLogiciel(){

        return $this->render('logiciel/researchLogiciel');

    }

    public function buttonLogiciel(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['btnResearchLogiciel'])){
                header('Location: researchLogiciel');
            }
            else if (isset($_POST['btnAddLogiciel'])) {
                header('Location: addLogiciel');
            }
        }

    }


}