<?php

require_once __DIR__ . '/../config/Database.php';

class Post
{
    private $conn; // Connexion à la base de données
    private $table = 'posts'; // Nom de la table des articles

    // Propriétés de l'article
    public $id;
    public $user_id;
    public $title;
    public $content;
    public $created_at;

    // Constructeur de la classe
    public function __construct()
    {
        $database = new Database(); // Instanciation de la classe Database pour la connexion à la base de données
        $this->conn = $database->getConnection(); // Récupération de la connexion à la base de données
    }

    // Méthode pour créer un nouvel article dans la base de données
    public function create()
    {
        // Requête SQL pour insérer un nouvel article
        $query = "INSERT INTO " . $this->table . " (user_id, title, content, created_at) VALUES (:user_id, :title, :content, NOW())";
        $stmt = $this->conn->prepare($query);

        // Nettoyage des données et liaison des paramètres
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->content = $this->content;

        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':content', $this->content);

        // Exécution de la requête SQL et retour du résultat
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Méthode pour lire tous les articles de la base de données
    public function read()
    {
        // Requête SQL pour sélectionner tous les articles
        $query = "SELECT id, user_id, title, content, created_at FROM " . $this->table . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Méthode pour lire les derniers articles de la base de données
    public function readLast()
    {
        // Requête SQL pour sélectionner les derniers articles
        $query = "SELECT id, user_id, title, content, created_at FROM " . $this->table . " ORDER BY created_at DESC LIMIT 3";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Méthode pour lire un article spécifique de la base de données
    public function readOne()
    {
        // Requête SQL pour sélectionner un article par son ID
        $query = "SELECT id, user_id, title, content, created_at FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Attribution des valeurs récupérées aux propriétés de l'objet article
        $this->user_id = $row['user_id'];
        $this->title = $row['title'];
        $this->content = $row['content'];
        $this->created_at = $row['created_at'];
    }

    // Méthode pour mettre à jour un article dans la base de données
    public function update()
    {
        // Requête SQL pour mettre à jour un article
        $query = "UPDATE " . $this->table . " SET user_id = :user_id, title = :title, content = :content WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        // Nettoyage des données et liaison des paramètres
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':id', $this->id);

        // Exécution de la requête SQL et retour du résultat
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Méthode pour supprimer un article de la base de données
    // public function delete($postId)
    // {
    //     // Requête SQL pour supprimer un article
    //     $query = "DELETE FROM " . $this->table . " WHERE id = :id";
    //     $stmt = $this->conn->prepare($query);

       

    //     $this->id = htmlspecialchars(strip_tags($postId));
    //     $stmt->bindParam(':id', $this->id);

    //     // Exécution de la requête SQL et retour du résultat
    //     if ($stmt->execute()) {
    //         return true;
    //     }
    //     return false;
    // }

    public function delete($postId)
    {
        try {
            // Commence une transaction
            $this->conn->beginTransaction();

            // Supprime d'abord les commentaires associés
            $queryComments = "DELETE FROM comments WHERE post_id = :post_id";
            $stmtComments = $this->conn->prepare($queryComments);
            $stmtComments->bindParam(':post_id', $postId, PDO::PARAM_INT);
            $stmtComments->execute();

            // Ensuite, supprime l'article
            $queryPost = "DELETE FROM " . $this->table . " WHERE id = :id";
            $stmtPost = $this->conn->prepare($queryPost);
            $stmtPost->bindParam(':id', $postId, PDO::PARAM_INT);
            $stmtPost->execute();

            // Valide la transaction
            $this->conn->commit();

            return true;
        } catch (Exception $e) {
            // Annule la transaction en cas d'erreur
            $this->conn->rollBack();
            return false;
        }
    }

}
