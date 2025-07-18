<?php

class Machine extends Model{
    private $id_machine;
    private $nom_machine;
    private $utilisateur_machine;
    private $fournisseur_machine;
    private $fabricant_machine;
    private $modele_machine;
    private $num_serie;
    private $intervention_machine;

    private $emplacement_machine;

    protected $table = 'machines';

    public function getId() {
        return $this->id_machine;
    }
    public function getNom(){
        return $this->nom_machine;
    }
    public function setNom($nom_machine){
        $this->nom_machine = $nom_machine;
    }
    public function getUtilisateur(){
        return $this->utilisateur_machine;
    }
    public function setUtilisateur(int $utilisateur_machine){
        $this->utilisateur_machine = $utilisateur_machine;
    }
    public function getFournisseur(){
        return $this->fournisseur_machine;
    }
    public function setFournisseur(int $fournisseur_machine){
        $this->fournisseur_machine = $fournisseur_machine;
    }

    public function getFabricant(){
        return $this->fabricant_machine;
    }
    public function setFabricant( $fabricant_machine){
        $this->fabricant_machine = $fabricant_machine;
    }
    public function getModele(){
        return $this->modele_machine;
    }
    public function setModele($modele_machine){
        $this->modele_machine = $modele_machine;
    }

    public function getNumSerie(){
        return $this->num_serie;
    }

    public function setNumSerie($num_serie){
        $this->num_serie = $num_serie;
    }

    public function getIntervention(){
        return $this->intervention_machine;
    }


    public function setIntervention($intervention_machine){
        $this->intervention_machine = $intervention_machine;
    }

    public function getEmplacement(){
        return $this->emplacement_machine;
    }

    public function setEmplacement(int $emplacement_machine){
        $this->emplacement_machine = $emplacement_machine;
    }


    public function add(){
        $query = "INSERT INTO $this->table (nom_machine, utilisateur_machine, fournisseur_machine, fabricant_machine, modele_machine, num_serie, intervention_machine, emplacement_machine) VALUES (:nom_machine, :utilisateur_machine, :fournisseur_machine, :fabricant_machine, :modele_machine, :num_serie, :intervention_machine, :emplacement_machine)";
        $stmt=$this->connection->prepare($query);
        
        return $stmt->execute([
            ':nom_machine'=>$this->nom_machine,
            ':utilisateur_machine'=>$this->utilisateur_machine,
            ':fournisseur_machine'=>$this->fournisseur_machine,
            ':fabricant_machine'=>$this->fabricant_machine,
            ':modele_machine'=>$this->modele_machine,
            ':num_serie'=>$this->num_serie,
            ':intervention_machine'=>$this->intervention_machine,
            ':emplacement_machine'=>$this->emplacement_machine
        ]);
    }
}