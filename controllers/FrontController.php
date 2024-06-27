<?php

// Inclusion du fichier de modèle Post
require_once __DIR__ . '/../models/Post.php';

// Déclaration de la classe FrontController
class FrontController
{
    // Propriété pour stocker une instance du modèle Post
    private $postModel;

    // Constructeur de la classe FrontController
    public function __construct()
    {
        // Création d'une nouvelle instance de la classe Post et assignation à la propriété postModel
        $this->postModel = new Post();
    }

    // Méthode pour obtenir tous les posts
    public function getAllPosts()
    {
        // Appel de la méthode read() du modèle Post pour récupérer tous les posts
        return $this->postModel->read();
    }

    // Méthode pour obtenir les derniers posts
    public function getLastPosts()
    {
        // Appel de la méthode readLast() du modèle Post pour récupérer les derniers posts
        return $this->postModel->readLast();
    }

    // Méthode pour obtenir un post par son ID
    public function getPostById($postId)
    {
        // Assignation de l'ID du post à la propriété id de l'instance postModel
        $this->postModel->id = $postId;
        // Appel de la méthode readOne() du modèle Post pour récupérer les détails d'un post spécifique
        $this->postModel->readOne();
        // Retour de l'instance postModel contenant les détails du post
        return $this->postModel;
    }
}

