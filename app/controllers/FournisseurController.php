<?php

class FournisseurController extends Controller{
    private $fournisseur;

    public function __construct(){
        parent::__construct();
        $this->fournisseur = new Fournisseur();
    }


    public function addFournisseur(){

        if ($_SESSION['user']['role_user'] !== 'admin') {
            echo 'accès refusé';
            return;
        }

        return $this->render('fournisseur/addFournisseur');

    }

    public function storeFournisseur(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->fournisseur->setName($_POST['name_fournisseur']);
            $this->fournisseur->setEmail($_POST['email_fournisseur']);
            $this->fournisseur->setAdress($_POST['adress_fournisseur']);
            $this->fournisseur->setPhone($_POST['phone_fournisseur']);

            if($this->fournisseur->add()){
                header('Location: listFournisseur');
                exit;
            }
            else {
                echo "Erreur lors de l'ajout";
            }
        }
    }

    public function listFournisseur(){

        $fournisseurs = $this->fournisseur->findAll();

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