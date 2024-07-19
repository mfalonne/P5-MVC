<?php

// Inclusion du fichier de configuration de la base de données
require_once '../config/Database.php';

// Déclaration de la classe User
class User
{
    private $conn; // Connexion à la base de données
    private $table = 'users'; // Nom de la table des utilisateurs

    // Propriétés de l'utilisateur
    public $id;
    public $username;
    public $password;
    public $is_admin;

    // Constructeur de la classe
    public function __construct()
    {
        $database = new Database(); // Instanciation de la classe Database pour la connexion à la base de données
        $this->conn = $database->getConnection(); // Récupération de la connexion à la base de données
    }

    // Méthode pour créer un nouvel utilisateur dans la base de données
    public function create($username, $password, $isAdmin)
    {
        // Requête SQL pour insérer un nouvel utilisateur
        $query = 'INSERT INTO ' . $this->table . ' (username, password, is_admin) VALUES (:username, :password, :is_admin)';
        
        // Préparation de la requête SQL
        $stmt = $this->conn->prepare($query);

        // Nettoyage des données et liaison des paramètres
        $this->username = htmlspecialchars(strip_tags($username));
        $this->password = password_hash($password, PASSWORD_DEFAULT); // Hashage du mot de passe
        $this->is_admin = htmlspecialchars(strip_tags($isAdmin));

        // Liaison des paramètres à la requête SQL
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':is_admin', $this->is_admin);

        // Exécution de la requête SQL et retour du résultat
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Méthode pour lire tous les utilisateurs de la base de données
    public function read()
    {
        // Requête SQL pour sélectionner tous les utilisateurs
        $query = 'SELECT id, username, password, is_admin FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Méthode pour lire un utilisateur spécifique de la base de données
    public function readOne()
    {
        // Requête SQL pour sélectionner un utilisateur par son ID
        $query = 'SELECT id, username, is_admin FROM ' . $this->table . ' WHERE id = ?';
        $stmt = $this->conn->prepare($query);

        // Liaison du paramètre ID
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        // Récupération du résultat
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Attribution des valeurs récupérées aux propriétés de l'objet utilisateur
        $this->username = $row['username'];
        $this->is_admin = $row['is_admin'];
    }

    // Méthode pour mettre à jour un utilisateur dans la base de données
    public function update()
    {
        // Requête SQL pour mettre à jour un utilisateur
        $query = 'UPDATE ' . $this->table . ' SET username = :username, password = :password, is_admin = :is_admin WHERE id = :id';
        $stmt = $this->conn->prepare($query);

        // Nettoyage des données et liaison des paramètres
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->password = password_hash($this->password, PASSWORD_DEFAULT); // Hashage du mot de passe lors de la mise à jour
        $this->is_admin = htmlspecialchars(strip_tags($this->is_admin));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // Liaison des paramètres à la requête SQL
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':is_admin', $this->is_admin);
        $stmt->bindParam(':id', $this->id);

        // Exécution de la requête SQL et retour du résultat
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Méthode pour supprimer un utilisateur de la base de données
    public function delete()
    {
        // Requête SQL pour supprimer un utilisateur par son ID
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        $stmt = $this->conn->prepare($query);

        // Nettoyage des données et liaison des paramètres
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(':id', $this->id);

        // Exécution de la requête SQL et retour du résultat
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
