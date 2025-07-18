<?php

class EmplacementController extends Controller{
    public function addEmplacement(){

        return $this->render('emplacement/addEmplacement');

    }

    public function storeEmplacement(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $emplacement = new Emplacement();

            $emplacement->setNom($_POST['nom_emplacement']);
            $emplacement->setDescription($_POST['description_emplacement']);
            $emplacement->setChemin($_POST['chemin_emplacement']);

            if ($emplacement->add()) {
                header('Location: listEmplacement');
                exit;
            }else {
                echo "Erreur lors de la création";
            }
        }

    }

    public function listEmplacement(){
        $emplacementModel = new Emplacement();

        $emplacements= $emplacementModel->findAll();

        return $this->render('emplacement/listEmplacement',['emplacements'=>$emplacements]);

    }

}

