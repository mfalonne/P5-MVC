<?php

// Inclusion du fichier de configuration de la base de données
require_once __DIR__ . '/../config/Database.php';

// Déclaration de la classe Comment
class Comment
{
    private $conn; // Connexion à la base de données
    private const TABLE_NAME = 'comments'; // Nom de la table des commentaires (constante)

    // Propriétés de la classe
    public $id;
    public $post_id;
    public $user_id;
    public $content;
    public $created_at;

    // Constructeur de la classe
    public function __construct()
    {
        // Initialise la connexion à la base de données
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Créer un commentaire
    public function create()
    {
        // Requête SQL pour insérer un nouveau commentaire
        $query = "INSERT INTO " . self::TABLE_NAME . " (post_id, user_id, content, created_at, is_validated) VALUES (:post_id, :user_id, :content, NOW(), false)";
        $stmt = $this->conn->prepare($query);

        // Sécuriser les données
        $this->post_id = htmlspecialchars(strip_tags($this->post_id));
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->content = htmlspecialchars(strip_tags($this->content));

        // Lier les paramètres
        $stmt->bindParam(':post_id', $this->post_id, PDO::PARAM_INT);
        $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_INT);
        $stmt->bindParam(':content', $this->content, PDO::PARAM_STR);

        // Exécuter la requête
        return $stmt->execute();
    }

    // Lire tous les commentaires validés d'un post
    public function readByPostId()
    {
        // Requête SQL pour sélectionner tous les commentaires validés d'un post
        $query = "SELECT c.id, c.post_id, c.user_id, c.content, c.created_at, u.username AS user_name 
                  FROM " . self::TABLE_NAME . " c 
                  JOIN users u ON c.user_id = u.id 
                  WHERE c.post_id = :post_id AND c.is_validated = true 
                  ORDER BY c.created_at DESC";
        $stmt = $this->conn->prepare($query);

        // Lier le paramètre
        $stmt->bindParam(':post_id', $this->post_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }

    // Lire un commentaire par ID
    public function readById($commentId)
    {
        // Requête SQL pour sélectionner un commentaire par ID
        $query = "SELECT c.id, c.post_id, c.user_id, c.content, c.created_at, u.username AS user_name 
                  FROM " . self::TABLE_NAME . " c
                  JOIN users u ON c.user_id = u.id
                  WHERE c.id = :id";
        $stmt = $this->conn->prepare($query);

        // Lier le paramètre
        $stmt->bindParam(':id', $commentId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Lire un commentaire
    public function readOne()
    {
        // Requête SQL pour sélectionner un commentaire par ID sans JOIN
        $query = "SELECT id, post_id, user_id, content, created_at 
                FROM " . self::TABLE_NAME . " 
                WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        // Lier le paramètre
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();

        // Récupérer le résultat
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $this->post_id = $row['post_id'];
            $this->user_id = $row['user_id'];
            $this->content = $row['content'];
            $this->created_at = $row['created_at'];
            return $this; // Retourner l'objet après avoir chargé les propriétés
        }

        return null; // Retourner null si le commentaire n'a pas été trouvé
    }

    // Lire les commentaires non validés
    public function readOnValidated()
    {
        // Requête SQL pour sélectionner les commentaires non validés
        $query = "SELECT * FROM " . self::TABLE_NAME . " WHERE is_validated = false";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Mettre à jour le statut d'un commentaire
    public function validateComment($commentId)
    {
        // Requête SQL pour valider un commentaire
        $query = "UPDATE " . self::TABLE_NAME . " SET is_validated = true WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $commentId, PDO::PARAM_INT);

        // Exécuter la requête
        return $stmt->execute();
    }

    // Supprimer un commentaire
    public function delete($commentId)
    {
        // Requête SQL pour supprimer un commentaire
        $query = "DELETE FROM " . self::TABLE_NAME . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $commentId, PDO::PARAM_INT);

        // Exécuter la requête
        return $stmt->execute();
    }

    // Méthode pour récupérer les commentaires validés d'un post
    public function getValidatedCommentsByPostId($postId)
    {
        // Requête SQL pour sélectionner les commentaires validés par post_id
        $query = "SELECT * FROM " . self::TABLE_NAME . " WHERE post_id = :post_id AND is_validated = true";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':post_id', $postId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthode pour récupérer les commentaires non validés
    public function getUnvalidatedComments()
    {
        // Requête SQL pour sélectionner les commentaires non validés
        $query = "SELECT * FROM " . self::TABLE_NAME . " WHERE is_validated = false";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
