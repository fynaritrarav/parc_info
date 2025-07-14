<?php

class UserController extends Controller{
    public function addUser(){

        return $this->render('user/addUser');

    }

    public function storeUser(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();

            $user->setName($_POST['name_user']);
            $user->setEmail($_POST['email_user']);
            $user->setAdress($_POST['adress_user']);
            $user->setPhone($_POST['phone_user']);

            if ($user->add()) {
                header('Location: listUser');
                exit;
            }else {
                echo "Erreur lors de la création";
            }
        }

    }

    public function listUser(){
        $userModel = new User();

        $users= $userModel->findAll();

        return $this->render('user/listUser',['users'=>$users]);

    }

    public function researchUser(){
        return $this->render('user/researchUser');
    }

    public function buttonUser(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['btnResearchUser'])){
                header('Location: researchUser');
            }
            else if(isset($_POST['btnAddUser'])){
                header('Location: addUser');
            }
            else{
                echo "Aucun bouton cliquer";
            }
        }
        
    }
}

