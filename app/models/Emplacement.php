<?php

class Emplacement extends Model{
    private $id_emplacement;
    private $nom_emplacement;
    private $description_emplacement;
    private $chemin_emplacement;

    protected $table = 'emplacements';

    public function getId() {
        return $this->id_emplacement;
    }
    public function getNom(){
        return $this->nom_emplacement;
    }
    public function setNom($nom_emplacement){
        $this->nom_emplacement = $nom_emplacement;
    }
    public function getDescription(){
        return $this->description_emplacement;
    }
    public function setDescription($description_emplacement){
        $this->description_emplacement = $description_emplacement;
    }
    public function getChemin(){
        return $this->chemin_emplacement;
    }
    public function setChemin($chemin_emplacement){
        $this->chemin_emplacement = $chemin_emplacement;
    }

    public function add(){
        $query = "INSERT INTO $this->table (nom_emplacement, description_emplacement, chemin_emplacement) VALUES (:nom_emplacement, :description_emplacement, :chemin_emplacement)";
        $stmt=$this->connection->prepare($query);
        
        return $stmt->execute([
            ':nom_emplacement'=>$this->nom_emplacement,
            ':description_emplacement'=>$this->description_emplacement,
            ':chemin_emplacement'=>$this->chemin_emplacement
        ]);
    }
}