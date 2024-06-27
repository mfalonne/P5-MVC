<?php

class Database
{
    // Déclaration des propriétés pour les détails de connexion à la base de données
    private $host = "localhost";       // Nom d'hôte du serveur de base de données
    private $db_name = "mon_blog3";    // Nom de la base de données
    private $username = "root";        // Nom d'utilisateur pour la base de données
    private $password = "";            // Mot de passe pour la base de données
    private $conn;                     // Variable pour l'objet de connexion PDO

    // Méthode pour obtenir la connexion à la base de données
    public function getConnection()
    {
        // Initialiser la connexion à null
        $this->conn = null;

        try {
            // Création d'une nouvelle connexion PDO
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            // Définir le mode d'erreur PDO pour lancer des exceptions
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Définir l'encodage des caractères à UTF-8
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            // Afficher le message d'erreur en cas de problème de connexion
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        // Retourner l'objet de connexion PDO
        return $this->conn;
    }
}

