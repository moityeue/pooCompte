<?php

namespace App\Banque;
use App\Client\Compte as CompteClient;
/**
 * Compte avec taux d'intérèts
 */

class CompteEpargne extends Compte
{
    /**
     * Taux d'intérets
     *
     * @var int
     */
    private $taux_interets;

    /**
     * Constructeur du compte épargne
     *
     * @param CompteClient Compte du titulaire
     * @param float $montant Montant à l'ouverture
     * @param integer $taux Taux d'intérèts
     * @return void
     */
    public function __construct(CompteClient $compte, float $montant, int $taux)
    {
        //On transfère les valeurs nécessaires au constructeur parent
        parent::__construct($compte, $montant);

        $this->taux_interets = $taux;
    }

    /**
     * get taux intérèts du compte
     *
     * @return int
     */

    public function getTauxInterts(): int
    {
        return $this->taux_interets;
    }

    /**
     * set taux intérets 
     *
     * @return self
     */
    public function setTauxInterets(int $taux_interets): self
    {
        if($taux_interets >= 0){
             $this->taux_interets = $taux_interets;
        }
       return $this;
    }


    public function verserInterets()
    {
        $this->solde = $this->solde + ($this->solde * $this->taux_interets /100);
    }
}