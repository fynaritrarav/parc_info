<?php

class Peripherique extends Model{
    private $id_peripherique;
    private $nom_peripherique;
    private $utilisateur_peripherique;
    private $fournisseur_peripherique;
    private $fabricant_peripherique;
    private $modele_peripherique;
    private $numero_serie;
    private $intervention_peripherique;

    private $emplacement_peripherique;

    protected $table = 'peripheriques';

    public function getId() {
        return $this->id_peripherique;
    }
    public function getNom(){
        return $this->nom_peripherique;
    }
    public function setNom($nom_peripherique){
        $this->nom_peripherique = $nom_peripherique;
    }
    public function getUtilisateur(){
        return $this->utilisateur_peripherique;
    }
    public function setUtilisateur(int $utilisateur_peripherique){
        $this->utilisateur_peripherique = $utilisateur_peripherique;
    }
    public function getFournisseur(){
        return $this->fournisseur_peripherique;
    }
    public function setFournisseur(int $fournisseur_peripherique){
        $this->fournisseur_peripherique = $fournisseur_peripherique;
    }

    public function getFabricant(){
        return $this->fabricant_peripherique;
    }
    public function setFabricant( $fabricant_peripherique){
        $this->fabricant_peripherique = $fabricant_peripherique;
    }
    public function getModele(){
        return $this->modele_peripherique;
    }
    public function setModele($modele_peripherique){
        $this->modele_peripherique = $modele_peripherique;
    }

    public function getNumSerie(){
        return $this->numero_serie;
    }

    public function setNumSerie($numero_serie){
        $this->numero_serie = $numero_serie;
    }

    public function getIntervention(){
        return $this->intervention_peripherique;
    }


    public function setIntervention($intervention_peripherique){
        $this->intervention_peripherique = $intervention_peripherique;
    }

    public function getEmplacement(){
        return $this->emplacement_peripherique;
    }

    public function setEmplacement(int $emplacement_peripherique){
        $this->emplacement_peripherique = $emplacement_peripherique;
    }


    public function add(){
        $query = "INSERT INTO $this->table (nom_peripherique, utilisateur_peripherique, fournisseur_peripherique, fabricant_peripherique, modele_peripherique, numero_serie, intervention_peripherique, emplacement_peripherique) VALUES (:nom_peripherique, :utilisateur_peripherique, :fournisseur_peripherique, :fabricant_peripherique, :modele_peripherique, :numero_serie, :intervention_peripherique, :emplacement_peripherique)";
        $stmt=$this->connection->prepare($query);
        
        return $stmt->execute([
            ':nom_peripherique'=>$this->nom_peripherique,
            ':utilisateur_peripherique'=>$this->utilisateur_peripherique,
            ':fournisseur_peripherique'=>$this->fournisseur_peripherique,
            ':fabricant_machine'=>$this->fabricant_peripherique,
            ':modele_peripherique'=>$this->modele_peripherique,
            ':numero_serie'=>$this->numero_serie,
            ':intervention_peripherique'=>$this->intervention_peripherique,
            ':emplacement_peripherique'=>$this->emplacement_peripherique
        ]);
    }

    public function findAll_Name(){
        $query = "SELECT p.*, u.name_user, f.name_fournisseur
                  FROM $this->table p
                  LEFT JOIN users u ON p.utilisateur_peripherique = u.id_user
                  LEFT JOIN fournisseurs f ON p.fournisseur_peripherique = f.id_fournisseur";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}