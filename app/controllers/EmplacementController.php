<?php

class EmplacementController extends Controller{
    private $emplacement;

    public function __construct(){
        parent::__construct();
        $this->emplacement = new Emplacement();
    }
    public function addEmplacement(){

        if ($_SESSION['user']['role_user'] !== 'admin') {
            echo 'accès refusé';
            return;
        }

        return $this->render('emplacement/addEmplacement');

    }

    public function storeEmplacement(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->emplacement->setNom($_POST['nom_emplacement']);
            $this->emplacement->setDescription($_POST['description_emplacement']);
            $this->emplacement->setChemin($_POST['chemin_emplacement']);

            if ($this->emplacement->add()) {
                header('Location: listEmplacement');
                exit;
            }else {
                echo "Erreur lors de la création";
            }
        }

    }

    public function listEmplacement(){

        $emplacements= $this->emplacement->findAll();

        return $this->render('emplacement/listEmplacement',['emplacements'=>$emplacements]);

    }

    public function researchEmplacement(){
        
        return $this->render('emplacement/researchEmplacement');

    }

    public function buttonEmplacement(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['btnResearchEmplacement'])){
                header('Location: researchEmplacement');
            }
            else if (isset($_POST['btnAddEmplacement'])) {
                header('Location: addEmplacement');
            }
            else {
                echo "Aucun bouton cliqué";
            }
        }
    }

}

