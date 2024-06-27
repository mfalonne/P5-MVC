<?php

require_once __DIR__ . '/../config/Database.php';

class Comment
{
    private $conn;
    private $table = 'comments';

    public $id;
    public $post_id;
    public $user_id;
    public $content;
    public $created_at;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Créer un commentaire
    public function create()
    {
        $query = "INSERT INTO " . $this->table . " (post_id, user_id, content, created_at) VALUES (:post_id, :user_id, :content, NOW())";
        $stmt = $this->conn->prepare($query);

        $this->post_id = htmlspecialchars(strip_tags($this->post_id));
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->content = htmlspecialchars(strip_tags($this->content));

        $stmt->bindParam(':post_id', $this->post_id);
        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->bindParam(':content', $this->content);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Lire tous les commentaires d'un post
    public function readByPostId()
    {
        $query = "SELECT c.id, c.post_id, c.user_id, c.content, c.created_at, u.username AS user_name FROM " . $this->table . " c JOIN users u ON c.user_id = u.id WHERE c.post_id = ? ORDER BY c.created_at DESC";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->post_id);
        $stmt->execute();
        return $stmt;
    }
public function readById($commentId)
{
    $commentId = intval($commentId);
    $query = "SELECT c.id, c.post_id, c.user_id, c.content, c.created_at, u.username AS user_name 
              FROM " . $this->table . " c
              JOIN users u ON c.user_id = u.id
              WHERE c.id = ?";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(1, $commentId, PDO::PARAM_INT);
    $stmt->execute();
    $comment = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($comment);die();
    return $comment;
}
public function readOne()
{
    $query = "SELECT c.id, c.post_id, c.user_id, c.content, c.created_at, u.username AS user_name 
              FROM " . $this->table . " c
              JOIN users u ON c.user_id = u.id
              WHERE c.id = ?";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(1, $this->id, PDO::PARAM_INT);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $this->post_id = $row['post_id'];
        $this->user_id = $row['user_id'];
        $this->content = $row['content'];
        $this->created_at = $row['created_at'];
        $this->user_name = $row['user_name'];
        return $this; // Retourner l'objet après avoir chargé les propriétés
    }

    return null; // Retourner null si le commentaire n'a pas été trouvé
}

    // Supprimer un commentaire
    public function delete()
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
