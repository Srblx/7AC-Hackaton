<?php

class Model
{   //* Début de la Classe

    private $bd;

    private static $instance = null;

    /*
         * Constructeur créant l'objet PDO et l'affectant à $bd
         */
    private function __construct()
    {  //* Fonction qui sert à faire le lien avec la BDD


        $dsn = "mysql:host=localhost;dbname=pure_ocean";   //* Coordonnées de la BDD
        $login = "root";   //* Identifiant d'accès à la BD
        $mdp = ""; //* Mot de passe d'accès à la BDD

 

        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->query("SET NAMES 'utf8'");
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    //* get_model()

    public static function get_model()
    {
        //* Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

    public function get_donnees()
    {
         // Préparer la requête SQL pour sélectionner toute les donnéesdans 
         $r = $this->bd->prepare("SELECT * FROM hydrolical_data;");

         // Exécuter la requête
         $r->execute();
 
         // Récupérer tous les résultats sous forme d'un tableau d'objets
         return $r->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function get_donnees_by_date($date_donnee)
    {
        // Préparer la requête SQL pour sélectionner les données pour la date donnée
        $r = $this->bd->prepare("SELECT * FROM hydrolical_data ");
        $r->bindValue(':date', $date_donnee);

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }
}
