<?php

use App\Autoloader;
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant, CompteEpargne};

require_once 'classes/Autoloader.php';
Autoloader::register();

// require_once 'classes/Banque/Compte.php';
// require_once 'classes/Banque/CompteCourant.php';
// require_once 'classes/Banque/CompteEpargne.php';
// require_once 'classes/Client/Compte.php';

//On instancie le compte
$client = new CompteClient('ab', 'ac','Nancy');

$compte1 = new CompteCourant($client, 500, 200);
var_dump($client);
var_dump($compte1);

 //$compte2 = new CompteClient();

// //$compte1->solde = '4';
// //$compte1->titulaire = 'al';

// //on depose 100Euros
// //$compte1->deposer(100);

// // $compte1->voirSolde();

// //echo $compte1->getTitulaire();

// // $compte1->setTitulaire("");
// // $compte1->setSolde(500);
// //echo "Le taux d'intérèt est de : " . Compte::TAUX_INTERETS . "%";
// // $compte1->setDecouvert(150);
//  $compte1->retirer(200);

//   var_dump($compte1);

// //$compteEpargne = new CompteEpargne('Al' , 300, 4);
// // var_dump($compteEpargne);
// // $compteEpargne->verserInterets();
//  var_dump($compteEpargne);
// $compte2 = new Compte('Poumba', 10);

// //$compte2->solde = '1 euro';
// var_dump($compte2);
// $compte2->voirSolde();

// $compte3 = new Compte('Dos');
// $compte3->deposer(5000);
// var_dump($compte3);
// $compte3->voirSolde();

// $client = new CompteClient;

// var_dump($client);

