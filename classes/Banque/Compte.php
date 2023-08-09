<?php

namespace App\Banque;
use App\Client\Compte as CompteClient;
/*
 * Objet Compte bancaire
 */
abstract class Compte
{
    //PROPRIETES//

   /**
    * Titulaire du compte
    *
    * @var CompteClient
    */
    private CompteClient $titulaire;

    /**
     * Solde du compte
     *
     * @var float
     */
    protected float $solde;
     

    //METHODES//
    /**
     * Constructeur du compte bancaire
     *
     * @param CompteClient $compte = Compte client du titulaire
     * @param float $montant = montant du solde
     */
    public function __construct(CompteClient $compte, float $montant = 200)
    {
        // on attribue le nom à la propriété titulaire de l'instance créée
            $this->titulaire = $compte;


        // on attribue le montant à la propriété solde 
            $this->solde = $montant;
    }

        public function __toString()
        {
            return "Vous visualisez le compte de {$this->titulaire}, le solde est de {$this->solde} euros";
        }
        //Accesseurs
        /**
         * Getter de titulaire - Retounes la valeur du titulaire du compte
         *
         * @return CompteClient
         */
    public function getTitulaire(): CompteClient
    {
        return $this->titulaire;
    }

    /**
     * Modifie le compte du titulaire et reournes l'objet
     *
     * @param CompteClient $nom -> CompteClient du titulaire
     * @return Compte Compte bancaire
     */
    public function setTitulaire(CompteClient $compte): self //(=la classe elle meme)
    {   
        //On vérifie si on a un titulaire

        if(isset($compte)){
            $this->titulaire = $compte;
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
