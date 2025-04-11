<?php
class Connexion {
    private $connexion;
    public function __construct() {
        $host = 'localhost';
        $dbname = 'school1';
        $login = 'root';
        $password = '';  // Changed from empty to 'root'
        try {
            $this->connexion = new PDO("mysql:host=$host;port=3307;dbname=$dbname", $login, $password);  // Added port=3307
            $this->connexion->query("SET NAMES UTF8");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    function getConnexion() {
        return $this->connexion;
    }
}