<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class Database
{
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $conn;

    public function __construct()
    {
        $this->host = $_ENV['DB_HOST'] ?? 'localhost';
        $this->db_name = $_ENV['DB_NAME'] ?? 'default_db_name';
        $this->username = $_ENV['DB_USER'] ?? 'default_user';
        $this->password = $_ENV['DB_PASS'] ?? 'default_password';
    }

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            error_log("[" . date("Y-m-d H:i:s") . "] Erreur de connexion : " . $exception->getMessage() . PHP_EOL, 3, __DIR__ . "/logs/error_log.txt");

            // Vous pouvez lancer une exception personnalisée ici
            throw new Exception("Erreur de connexion à la base de données.");
        }

        return $this->conn;
    }
}
