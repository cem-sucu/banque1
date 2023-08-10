<?php

class Titulaire{
    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;
    private string $ville;
    private array $ensembleCompte;

    public function __construct(string $nom,string $prenom, string $dateDeNaissance, string $ville)
    {
        $this->nom = $nom;
        $this-> prenom = $prenom;
        $this-> dateDeNaissance = new DateTime($dateDeNaissance);
        $this-> ville = $ville;
        // pour regrouper tout ses comptes
        $this-> ensembleCompte = [];
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of dateDeNaissance
     */ 
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set the value of dateDeNaissance
     *
     * @return  self
     */ 
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of ensembleCompte
     */ 
    public function getEnsembleCompte()
    {
        return $this->ensembleCompte;
    }

    /**
     * Set the value of ensembleCompte
     *
     * @return  self
     */ 
    public function setEnsembleCompte($ensembleCompte)
    {
        $this->ensembleCompte = $ensembleCompte;

        return $this;
    }

    public function calculeAge(){
        $aujourdhui = new DateTime();
        $difference = $this->dateDeNaissance->diff($aujourdhui);
        return $difference->format("%y ans");
        
    }


    //TODO la function pour ajouter un compte
    public function ajouterCompte($compte) {
        $this->ensembleCompte[] = $compte;
    }



    //TODO la function _toString
    public function __toString():string{
        return $this->getNom() ." " 
        .$this->getPrenom() 
        .$this->getDateDeNaissance()->format("d-m-Y")." a ".
        $this->calculeAge() ." <br><br>";
    }
}

?>