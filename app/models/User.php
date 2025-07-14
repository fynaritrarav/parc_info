<?php

class User extends Model{
    private $id_user;
    private $name_user;
    private $email_user;
    private $adress_user;
    private $phone_user;

    protected $table = 'users';

    public function getId() {
        return $this->id_user;
    }
    public function getName(){
        return $this->name_user;
    }
    public function setName($name_user){
        $this->name_user = $name_user;
    }
    public function getEmail(){
        return $this->email_user;
    }
    public function setEmail($email_user){
        $this->email_user = $email_user;
    }
    public function getAdress(){
        return $this->adress_user;
    }
    public function setAdress($adress_user){
        $this->adress_user = $adress_user;
    }
    public function getPhone(){
        return $this->phone_user;
    }
    public function setPhone($phone_user){
        $this->phone_user = $phone_user;
    }

    public function add(){
        $query = "INSERT INTO $this->table (name_user, email_user, adress_user, phone_user) VALUES (:name_user, :email_user, :adress_user, :phone_user)";
        $stmt=$this->connection->prepare($query);
        
        return $stmt->execute([
            ':name_user'=>$this->name_user,
            ':email_user'=>$this->email_user,
            ':adress_user'=>$this->adress_user,
            ':phone_user'=>$this->phone_user
        ]);
    }
}