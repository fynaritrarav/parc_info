<?php

class LogicielController extends Controller{

    private $logiciel;

    public function __construct(){
        parent::__construct();
        $this->logiciel = new Logiciel();
    }

    public function addLogiciel(){

        if ($_SESSION['user']['role_user'] !== 'admin') {
            echo 'accès refusé';
            return;
        }

        $machine = new Machine();

        $machines = $machine->findAll();

        return $this->render('logiciel/addLogiciel', ['machines' => $machines]);

    }

    public function storeLogiciel(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $this->logiciel->setNom($_POST['nom_logiciel']);
            $this->logiciel->setDescription($_POST['description_logiciel']);
            $this->logiciel->setEditeur($_POST['editeur_logiciel']);
            $this->logiciel->setVersion($_POST['version_logiciel']);
            $this->logiciel->setType($_POST['type_logiciel']);
            $this->logiciel->setMachine((int)$_POST['machine_logiciel']);

            if ($this->logiciel->add()) {
                header('Location: listLogiciel');
                exit;
            }
            else {
                echo "Erreur lors de l'ajout";
            }
        }

    }

    public function listLogiciel(){

        $logiciels = $this->logiciel->findAll_Name();

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