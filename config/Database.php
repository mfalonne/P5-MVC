<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class Database
{
    // Déclaration des propriétés pour les détails de connexion à la base de données
    private $host;  // Nom d'hôte du serveur de base de données
    private $db_name; // Nom de la base de données
    private $username; // Nom d'utilisateur pour la base de données
    private $password; // Mot de passe pour la base de données
    private $conn; // Variable pour l'objet de connexion PDO

   public function __construct()
    {
        $this->host = isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : 'localhost'; // Remplacez 'localhost' par la valeur par défaut appropriée
        $this->db_name = isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : 'default_db_name'; // Remplacez 'default_db_name' par la valeur par défaut appropriée
        $this->username = isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : 'default_user'; // Remplacez 'default_user' par la valeur par défaut appropriée
        $this->password = isset($_ENV['DB_PASS']) ? $_ENV['DB_PASS'] : 'default_password'; // Remplacez 'default_password' par la valeur par défaut appropriée
    }
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
            // Loguer l'erreur dans le fichier logs/error_log.txt
            error_log("[" . date("Y-m-d H:i:s") . "] Erreur de connexion : " . $exception->getMessage() . PHP_EOL, 3, __DIR__ . "/logs/error_log.txt");
            die("Erreur de connexion à la base de données."); // Message générique pour l'utilisateur
        }

        // Retourner l'objet de connexion PDO
        return $this->conn;
    }
}

