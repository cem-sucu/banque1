<?php

class CompteBancaire{
    private string $libelle;
    private float $soldeInitiale;
    private string $devideMonetaire;
    protected Titulaire $titulaireCompte;

    public function __construct(string $libelle, float $soldeInitiale, string $devideMonetaire, $titulaireCompte){
        $this-> libelle =$libelle;
        $this-> soldeInitiale = $soldeInitiale;
        $this-> devideMonetaire = $devideMonetaire;
        $this-> titulaireCompte = $titulaireCompte;


        //créé dans la classe Titulaire pour ajouter les comptes dans le titulaireCompte
        $titulaireCompte -> ajouterCompte($titulaireCompte);

    }

    

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of soldeInitiale
     */ 
    public function getSoldeInitiale()
    {
        return $this->soldeInitiale;
    }

    /**
     * Set the value of soldeInitiale
     *
     * @return  self
     */ 
    public function setSoldeInitiale($soldeInitiale)
    {
        $this->soldeInitiale = $soldeInitiale;

        return $this;
    }

    /**
     * Get the value of devideMonetaire
     */ 
    public function getDevideMonetaire()
    {
        return $this->devideMonetaire;
    }

    /**
     * Set the value of devideMonetaire
     *
     * @return  self
     */ 
    public function setDevideMonetaire($devideMonetaire)
    {
        $this->devideMonetaire = $devideMonetaire;

        return $this;
    }

    /**
     * Get the value of titulaireCompte
     */ 
    public function getTitulaireCompte()
    {
        return $this->titulaireCompte;
    }

    /**
     * Set the value of titulaireCompte
     *
     * @return  self
     */ 
    public function setTitulaireCompte($titulaireCompte)
    {
        $this->titulaireCompte = $titulaireCompte;

        return $this;
    }

    //TODO méethode pour créditer
    public function crediter($montant){
        $this-> soldeInitiale += $montant;
    }
    //TODO méthode pour débité
    public function debiter($montant){
        $this-> soldeInitiale -= $montant;
    }


    //TODO et pourt effectuer un virement d'un compte à l'autre
    public function virement($compteDestinataire, $montant) {
        $this->debiter($montant);
        $compteDestinataire->crediter($montant);
    }


    //TODO afficher les infos
    public function afficherInfos() {
        echo "libéllé : $this->libelle <br>";
        echo "solde  : $this->soldeInitiale<br>";
        echo "devise : $this->devideMonetaire<br>";
        echo "titulaire du compte : " . $this->titulaireCompte->__toString();
    }

}



?>