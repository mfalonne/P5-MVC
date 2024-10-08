<?php

// Inclusion du fichier de configuration de la base de données
require_once __DIR__ . '/../config/Database.php';

// Déclaration de la classe Post
class Post
{
    private $conn; // Connexion à la base de données
    private const TABLE_NAME = 'posts'; // Nom de la table des articles (constante)

    // Propriétés de l'article
    public $id;
    public $user_id;
    public $title;
    public $chapo;
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
        try {
            // Requête SQL pour insérer un nouvel article
            $query = "INSERT INTO " . self::TABLE_NAME . " (user_id, title, chapo, content, created_at) VALUES (:user_id, :title, :chapo, :content, NOW())";
            
            // Préparation de la requête SQL
            $stmt = $this->conn->prepare($query);

            // Nettoyage des données et liaison des paramètres
            $this->user_id = htmlspecialchars(strip_tags($this->user_id));
            $this->title = htmlspecialchars(strip_tags($this->title));
            $this->chapo = htmlspecialchars(strip_tags($this->chapo)); // Nettoyage du chapo
            $this->content = htmlspecialchars($this->content); // Nettoyage du contenu (si nécessaire)

            // Lie les paramètres de la requête SQL aux variables correspondantes
            $stmt->bindParam(':user_id', $this->user_id, PDO::PARAM_INT);
            $stmt->bindParam(':title', $this->title, PDO::PARAM_STR);
            $stmt->bindParam(':chapo', $this->chapo, PDO::PARAM_STR);
            $stmt->bindParam(':content', $this->content, PDO::PARAM_STR);

            // Exécution de la requête SQL et retour du résultat
            return $stmt->execute();
        } catch (PDOException $e) {
            // Gestion des erreurs de la base de données
            error_log('Database error: ' . $e->getMessage());
            return false;
        }
    }


    // Méthode pour lire tous les articles de la base de données
    public function read()
    {
        // Requête SQL pour sélectionner tous les articles
        $query = "SELECT id, user_id, title, chapo, content, created_at FROM " . self::TABLE_NAME . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Méthode pour lire les derniers articles de la base de données
    public function readLast()
    {
        // Requête SQL pour sélectionner les derniers articles
        $query = "SELECT id, user_id, title, chapo, content, created_at FROM " . self::TABLE_NAME . " ORDER BY created_at DESC LIMIT 3";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Méthode pour lire un article spécifique de la base de données
    public function readOne()
    {
        $query = "SELECT id, user_id, title, chapo, content, created_at FROM " . self::TABLE_NAME . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $this->user_id = $row['user_id'];
            $this->title = $row['title'];
            $this->chapo = $row['chapo'];
            $this->content = $row['content'];
            $this->created_at = $row['created_at'];
        } else {
            // Gérer le cas où aucun article n'est trouvé
            $this->id = null;
        }
    }


    // Méthode pour mettre à jour un article dans la base de données
    public function update()
    {
        // Requête SQL pour mettre à jour un article
        $query = "UPDATE " . self::TABLE_NAME . " SET user_id = :user_id, title = :title, chapo = :chapo, content = :content WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        // Nettoyage des données et liaison des paramètres
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->chapo = htmlspecialchars(strip_tags($this->chapo));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':chapo', $this->chapo);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':id', $this->id);

        // Exécution de la requête SQL et retour du résultat
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Méthode pour supprimer un article et ses commentaires associés de la base de données
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
            $queryPost = "DELETE FROM " . self::TABLE_NAME . " WHERE id = :id";
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

    // Méthode pour récupérer un article par son ID
    public function getPostById($id)
    {
        $query = "SELECT * FROM " . self::TABLE_NAME . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
