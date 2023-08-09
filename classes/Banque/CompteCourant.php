<?php

namespace App\Banque;

use App\Client\Compte as CompteClient;
/**
 * Compte bancaire(hérite de Compte)
 */

class CompteCourant extends Compte
{
    private $decouvert;

/**
 * Constructeur de compte courant
 *
 * @param CompteClient Compte du titulaire 
 * @param float $montant Montant du solde à l'ouverture
 * @param integer $decouvert Decouvert autorisé
 * @return void
 */
    public function __construct(CompteClient $compte, float $montant, int $decouvert)
    {
        //On transfère les informations nécessaires au constructeur du compte
        parent::__construct($compte, $montant);
        $this->decouvert = $decouvert;
    }

    public function getDecouvert():int 
    {
        return $this->decouvert;
    }

    public function setDecouvert(int $montant):self 
    {   
        if($montant >= 0){
            $this->decouvert = $montant;
        }
        return $this;
    }

    public function retirer(float $montant)
    {
        // on vérifie si le decouvert permet le retrait
        if($montant > 0 && $this->solde - $montant >= -$this->decouvert){
            $this->solde -= $montant;
        }else{
            echo "Solde insuffisant";
        }
    }
}