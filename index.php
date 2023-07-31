<?php
require_once 'classes/Compte.php';

//On instancie le compte

$compte1 = new Compte('Uno', 300);

//$compte1->solde = '4';
//$compte1->titulaire = 'al';

//on depose 100Euros
 //$compte1->deposer(100);
// $compte1->retirer(80);

// $compte1->voirSolde();

//echo $compte1->getTitulaire();

// $compte1->setTitulaire("");
// $compte1->setSolde(500);
//echo "Le taux d'intérèt est de : " . Compte::TAUX_INTERETS . "%";

 var_dump($compte1);


// $compte2 = new Compte('Poumba', 10);

// //$compte2->solde = '1 euro';
// var_dump($compte2);
// $compte2->voirSolde();

// $compte3 = new Compte('Dos');
// $compte3->deposer(5000);
// var_dump($compte3);
// $compte3->voirSolde();