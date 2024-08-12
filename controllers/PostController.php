<?php

// Déclaration de la classe PostController
class PostController
{
    private $postModel; // Modèle pour la gestion des articles
    private $twig; // Moteur de templates Twig

    /**
     * Constructeur de la classe PostController.
     * Initialise une nouvelle instance du modèle Post et le moteur de templates Twig.
     * 
     * @param Twig_Environment $twig Le moteur de templates Twig.
     */
    public function __construct($twig)
    {
        $this->postModel = new Post(); // Instanciation du modèle d'article
        $this->twig = $twig; // Injection du moteur de templates Twig
    }

    /**
     * Méthode pour récupérer tous les articles.
     * 
     * @return array Retourne un tableau contenant tous les articles.
     */
    public function getAllPosts()
    {
        return $this->postModel->read(); // Appelle la méthode de lecture de tous les articles du modèle
    }

    /**
     * Méthode pour créer un nouvel article.
     * Vérifie les données de la requête POST et crée un nouvel article.
     */
    public function createPost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Vérifie si la requête est de type POST
            $userId = $_SESSION['user_id']; // Récupère l'ID de l'utilisateur à partir de la session
            $title = $_POST['title']; // Récupère le titre de l'article depuis les données de formulaire
            $chapo = $_POST['chapo']; // Récupère le chapo de l'article depuis les données de formulaire
            $content = $_POST['content']; // Récupère le contenu de l'article depuis les données de formulaire

            // Attribution des valeurs aux propriétés de l'objet modèle d'article
            $this->postModel->user_id = $userId;
            $this->postModel->title = $title;
            $this->postModel->chapo = $chapo;
            $this->postModel->content = $content;

            // Création de l'article dans la base de données via le modèle
            if ($this->postModel->create()) {
                header('Location: /dashboard'); // Redirection vers le tableau de bord après création de l'article
                exit();
            } else {
                // Affiche la vue d'ajout d'article avec un message d'erreur en cas d'échec
                echo $this->twig->render('add_post.twig', ['error' => 'Failed to create post.']);
            }
        } else {
            // Affiche la vue de formulaire d'ajout d'article si la requête n'est pas de type POST
            echo $this->twig->render('dashboard/add_post.twig');
        }
    }

    /**
     * Méthode pour éditer un article existant.
     * Vérifie les données de la requête POST et met à jour l'article spécifié.
     */
    public function editPost()
    {
        $postId = $_GET['id'] ?? null; // Récupère l'ID de l'article depuis les paramètres de requête

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $postId) { // Vérifie si la requête est de type POST et si l'ID de l'article est présent
            $userId = $_SESSION['user_id']; // Récupère l'ID de l'utilisateur à partir de la session
            $title = $_POST['title']; // Récupère le titre de l'article depuis les données de formulaire
            $chapo = $_POST['chapo']; // Récupère le chapo de l'article depuis les données de formulaire
            $content = $_POST['content']; // Récupère le contenu de l'article depuis les données de formulaire

            // Attribution des valeurs aux propriétés de l'objet modèle d'article
            $this->postModel->id = $postId;
            $this->postModel->user_id = $userId;
            $this->postModel->title = $title;
            $this->postModel->chapo = $chapo;
            $this->postModel->content = $content;

            // Mise à jour de l'article dans la base de données via le modèle
            if ($this->postModel->update()) {
                header('Location: /dashboard'); // Redirection vers le tableau de bord après édition de l'article
                exit();
            } else {
                // Affiche la vue d'édition d'article avec un message d'erreur en cas d'échec
                echo $this->twig->render('dashboard/edit_post.twig', ['error' => 'Failed to update post.']);
            }
        } else {
            if ($postId) {
                // Affiche la vue d'édition d'article avec les détails de l'article à éditer
                $post = $this->getPostById($postId);
                echo $this->twig->render('dashboard/edit_post.twig', ['post' => $post]);
            } else {
                // Affiche la vue 404 si l'ID de l'article est manquant
                http_response_code(404);
                echo $this->twig->render('404.twig');
            }
        }
    }

    /**
     * Méthode pour supprimer un article.
     * Vérifie les données de la requête POST et supprime l'article spécifié.
     */
    public function deletePost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) { // Vérifie si la requête est de type POST et si l'ID de l'article est présent
            $postId = intval($_POST['id']); // Convertit l'ID de l'article en un entier

            // Supprime l'article de la base de données via le modèle
            if ($this->postModel->delete($postId)) {
                header('Location: /dashboard'); // Redirection vers le tableau de bord après suppression de l'article
                exit();
            } else {
                echo 'Failed to delete post.'; // Affiche un message d'erreur en cas d'échec de la suppression de l'article
            }
        }
    }

    /**
     * Méthode pour récupérer un article par son ID.
     * 
     * @param int $postId L'ID de l'article à récupérer.
     * @return Post Retourne une instance du modèle Post contenant les détails de l'article.
     */
    public function getPostById($postId)
    {
        $this->postModel->id = $postId; // Attribution de l'ID de l'article à l'objet modèle d'article
        $this->postModel->readOne(); // Récupère les détails de l'article à partir de la base de données
        return $this->postModel; // Retourne l'objet modèle d'article avec les détails récupérés
    }

    /**
     * Méthode pour afficher les détails d'un article.
     * 
     * @param int $postId L'ID de l'article à afficher.
     */
    public function viewPost($postId)
    {
        $postModel = new Post(); // Instancie un nouvel objet Post
        $commentModel = new Comment(); // Instancie un nouvel objet Comment
        $post = $postModel->getPostById($postId); // Récupère les détails de l'article par son ID
        $comments = $commentModel->getValidatedCommentsByPostId($postId); // Récupère les commentaires validés associés à l'article
        echo $this->twig->render('post_detail.twig', ['post' => $post, 'comments' => $comments]); // Affiche la vue des détails de l'article avec les commentaires
    }
}

