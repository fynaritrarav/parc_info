<?php

class Fournisseur extends Model{
    private $id_fournisseur;
    private $name_fournisseur;
    private $email_fournisseur;
    private $adress_fournisseur;
    private $phone_fournisseur;
    protected $table = "fournisseurs";

    public function getId(){
        return $this->id_fournisseur;
    }

    public function getName(){
        return $this->name_fournisseur;
    }
    public function setName($name_fournisseur){
        $this->name_fournisseur = $name_fournisseur;
    }
    public function getEmail(){
        return $this->email_fournisseur;
    }
    public function setEmail($email_fournisseur){
        $this->email_fournisseur = $email_fournisseur;
    }
    public function getAdress(){
        return $this->adress_fournisseur;
    }
    public function setAdress($adress_fournisseur){
        $this->adress_fournisseur = $adress_fournisseur;
    }
    public function getPhone(){
        return $this->phone_fournisseur;
    }
    public function setPhone($phone_fournisseur){
        $this->phone_fournisseur = $phone_fournisseur;
    }

    public function add(){
        $query = "INSERT INTO $this->table (name_fournisseur, email_fournisseur, adress_fournisseur, phone_fournisseur) VALUES (:name_fournisseur, :email_fournisseur, :adress_fournisseur, :phone_fournisseur)";
        $stmt = $this->connection->prepare($query);
        
        return $stmt->execute([
            ':name_fournisseur'=>$this->name_fournisseur,
            'email_fournisseur'=>$this->email_fournisseur,
            'adress_fournisseur'=>$this->adress_fournisseur,
            'phone_fournisseur'=>$this->phone_fournisseur
        ]);
    }

}