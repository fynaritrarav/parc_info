<?php

class Logiciel extends Model{

    private $id_logiciel;
    private $nom_logiciel;
    private $description_logiciel;
    private $editeur_logiciel;
    private $version_logiciel; 
    private $type_logiciel;
    private $machine_logiciel;
    protected $table = 'logiciels';
    
    public function getId(){
        return $this->id_logiciel;
    }

    public function getNom(){
        return $this->nom_logiciel;
    }

    public function setNom($nom_logiciel){
        $this->nom_logiciel = $nom_logiciel ;
    }

    public function getDescription(){
        return $this->description_logiciel;
    }

    public function setDescription($description_logiciel){
        $this->description_logiciel = $description_logiciel;
    }

    public function getEditeur(){
        return $this->editeur_logiciel;
    }

    public function setEditeur($editeur_logiciel){
        $this->editeur_logiciel = $editeur_logiciel;
    }

    public function getVersion(){
        return $this->version_logiciel;
    }

    public function setVersion($version_logiciel){
        $this->version_logiciel = $version_logiciel;
    }

    public function getType(){
        return $this->type_logiciel;
    }

    public function setType($type_logiciel){
        $this->type_logiciel = $type_logiciel;
    }

    public function getMachine(){
        return $this->machine_logiciel;
    }

    public function setMachine(int $machine_logiciel){
        $this->machine_logiciel = $machine_logiciel;
    }

    public function add(){
        $query = "INSERT INTO $this->table (nom_logiciel, description_logiciel, editeur_logiciel, version_logiciel, type_logiciel, machine_logiciel) VALUES (:nom_logiciel, :description_logiciel, :editeur_logiciel, :version_logiciel, :type_logiciel, :machine_logiciel)";
        $stmt = $this->connection->prepare($query);

        return $stmt->execute([
            ':nom_logiciel' => $this->nom_logiciel,
            ':description_logiciel' => $this->description_logiciel,
            ':editeur_logiciel' => $this->editeur_logiciel,
            ':version_logiciel' => $this->version_logiciel,
            ':type_logiciel' => $this->type_logiciel,
            ':machine_logiciel' => $this->machine_logiciel
        ]);
    }

    public function findAll_Name(){
        $query = "SELECT l.*, m.nom_machine
                  FROM $this->table l
                  LEFT JOIN machines m ON l.machine_logiciel = m.id_machine";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();

    }
    
}