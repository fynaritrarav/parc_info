<?php

class UserController extends Controller{
    private $user;

    public function __construct(){
        parent::__construct();
        $this->user = new User();
    }

    public function login(){

        return $this->render('user/login');

    }


    public function loginVerify(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user = $this->user->passwordVerify($_POST['name_user'], $_POST['pwd_user']);
            if ($user) {
                $_SESSION['user'] = $user;
                if ($user['change_pwd']) {
                    header('Location: changeMdp');
                }
                else {
                    header('Location: ' . HOST . 'home');
                }
            }
            else {
                echo 'Utilisateur invalide';
            }
        }

    }

    public function changeMdp(){

        if (!isset($_SESSION['user'])) {
            header('Location: login');
        }
        else if($_SESSION['user']['role_user'] !== 'admin'){
            return $this->render('user/changerMdp');
        }
        else {
            header('Location: ' . HOST . 'home');
        }

    }

    public function updateChangeMdp(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->user->setPwd($_POST['pwd_user']);
            $this->user->updatePwd($_SESSION['user']['id_user'], $this->user->getPwd());
            $_SESSION['user']['change_pwd'] = 0;
            header('Location: home');
            exit;
        }

    }

    public function addUser(){

        if ($_SESSION['user']['role_user'] !== 'admin') {
            echo 'accès refusé';
            return;
        }
        else {
            return $this->render('user/addUser');
        }


    }

    public function storeUser(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->user->setName($_POST['name_user']);
            $this->user->setEmail($_POST['email_user']);
            $this->user->setAdress($_POST['adress_user']);
            $this->user->setPhone($_POST['phone_user']);
            $this->user->setPwd($_POST['pwd_user']);
            $this->user->setRole($_POST['role_user']);

            if ($this->user->add()) {
                header('Location: listUser');
                exit;
            }else {
                echo "Erreur lors de la création";
            }
        }

    }

    public function listUser(){

        $users= $this->user->findAll();

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

