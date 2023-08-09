<?php
namespace App;

class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {
        //On récupère dans $class la totalité du namespace de la classe concernée
        //on retire le App
      
        $class = str_replace(__NAMESPACE__ . '\\' , '', $class);

          //on remplace les \ par /
        $class = str_replace('\\', '/' , $class);
        $fichier = __DIR__ . '/' . $class . '.php';

        //on vérifie si le fichier existe
         if(file_exists($fichier)){
            require_once $fichier;
         }
        
    }
}
