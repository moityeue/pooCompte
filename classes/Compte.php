<?php
/*
 * Objet Compte bancaire
 */
class Compte
{
    //PROPRIETES//

   /**
    * Titulaire du compte
    *
    * @var string
    */
    private $titulaire;

    /**
     * Solde du compte
     *
     * @var float
     */
    private $solde;
     
    //Constantes 
    const TAUX_INTERETS = 100;


    //METHODES//
    /**
     * Constructeur du compte bancaire
     *
     * @param string $nom = Nom du titulaire
     * @param float $montant = montant du solde
     */
    public function __construct(string $nom, float $montant = 200)
    {
        // on attribue le nom à la propriété titulaire de l'instance créée
            $this->titulaire = $nom;


        // on attribue le montant à la propriété solde 
            $this->solde = $montant + ($montant * self::TAUX_INTERETS/100);
    }

        //Accesseurs
        /**
         * Getter de titulaire - Retounes la valeur du titulaire du compte
         *
         * @return string
         */
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    /**
     * Modifie le nom du titulaire et reournes l'objet
     *
     * @param string $nom -> Nom du titulaire
     * @return Compte Compte bancaire
     */
    public function setTitulaire(string $nom): self //(=la classe elle meme)
    {   
        //On vérifie si on a un titulaire

        if($nom != ""){
            $this->titulaire = $nom;
        }
        return $this;
    }

    /**
     * Retournes le solde du compte 
     *
     * @return float Solde du compte
     */
    public function getSolde(): float
    {
        return $this->solde;
    }
  
    /**
     * Retournes le solde du compte
     *
     * @param float Solde du compte
     * @return self
     */
    public function setSolde(float $montant): self
    {
        if($montant >= 0){
           $this->solde = $montant; 
        }
        return $this;
    }



    /**
     * Déposer un montant
     *
     * @param float $montant Montant déposé
     * @return void 
     */
    
    public function deposer(float $montant)
    {
        //On vérifie si le montant est positif
        if($montant > 0){
            $this->solde += $montant;
        }
    }


    /**
     * Retirer un montant inférieur au solde du compte
     *
     * @param float $montant Montant à retirer
     * @return void
     */
    public function retirer(float $montant)
    {
        //On vérifie le montant et le solde
        if($montant > 0 && $this->solde >= $montant){
            $this->solde -= $montant;
        } else {
            echo "Montant invalide ou solde insuffisant";
        }
    }

    /**
     * Retournes une chaine de caractère affichant le solde
     *
     * @return string
     */
    public function voirSolde()
    {
        echo "Votre solde est de $this->solde Euros ";
    }


}
