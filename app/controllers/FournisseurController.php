<?php

class FournisseurController extends Controller{

    public function addFournisseur(){
        return $this->render('fournisseur/addFournisseur');
    }

    public function storeFournisseur(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fournisseur = new Fournisseur();

            $fournisseur->setName($_POST['name_fournisseur']);
            $fournisseur->setEmail($_POST['email_fournisseur']);
            $fournisseur->setAdress($_POST['adress_fournisseur']);
            $fournisseur->setPhone($_POST['phone_fournisseur']);

            if($fournisseur->add()){
                header('Location: listFournisseur');
                exit;
            }
            else {
                echo "Erreur lors de l'ajout";
            }
        }
    }

    public function listFournisseur(){
        $fournisseurModel = new Fournisseur();

        $fournisseurs = $fournisseurModel->findAll();

        return $this->render('fournisseur/listFournisseur', ['fournisseurs'=>$fournisseurs]);
    }

    public function researchFournisseur(){
        return $this->render('fournisseur/researchFournisseur');
    }

    public function buttonFournisseur(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['btnResearchFournisseur'])){
                header('Location: researchFournisseur');
            }
            else if(isset($_POST['btnAddFournisseur'])){
                header('Location: addFournisseur');
            }
            else{
                echo "Aucun bouton cliquer";
            }
        }
        
    }
}