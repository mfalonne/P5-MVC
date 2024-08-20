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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_SESSION['user_id'] ?? null;
            $title = $_POST['title'] ?? '';
            $chapo = $_POST['chapo'] ?? '';
            $content = $_POST['content'] ?? '';

            $this->postModel->user_id = $userId;
            $this->postModel->title = $title;
            $this->postModel->chapo = $chapo;
            $this->postModel->content = $content;

            if ($this->postModel->create()) {
                $this->redirect('/dashboard');
            } else {
                $this->renderAddForm('Failed to create post.');
            }
        } else {
            $this->renderAddForm();
        }
    }

    /**
     * Méthode pour éditer un article existant.
     * Vérifie les données de la requête POST et met à jour l'article spécifié.
     */
    public function editPost()
    {
        $postId = $_GET['id'] ?? null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $postId) {
            $userId = $_SESSION['user_id'] ?? null;
            $title = $_POST['title'] ?? '';
            $chapo = $_POST['chapo'] ?? '';
            $content = $_POST['content'] ?? '';

            if (empty($title) || empty($content)) {
                $this->renderForm('Le titre et le contenu sont requis.', $postId);
                return;
            }

            $this->postModel->id = $postId;
            $this->postModel->user_id = $userId;
            $this->postModel->title = $title;
            $this->postModel->chapo = $chapo;
            $this->postModel->content = $content;

            if ($this->postModel->update()) {
                $this->redirect('/dashboard');
            } else {
                $this->renderForm('Échec de la mise à jour de l\'article.', $postId);
            }
        } else {
            if ($postId) {
                $post = $this->getPostById($postId);
                if ($post->id) { // Vérifie si l'article a été trouvé
                    $this->renderForm(null, $post);
                } else {
                    $this->render404(); // Article non trouvé
                }
            } else {
                $this->render404(); // ID de l'article manquant
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
                $this->redirect('/dashboard'); // Redirection vers le tableau de bord après suppression de l'article
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

    /**
     * Redirige vers une nouvelle URL.
     * 
     * @param string $url L'URL vers laquelle rediriger.
     */
    private function redirect($url)
    {
        header('Location: ' . $url);
        // Enlevez exit() pour permettre à l'appelant de gérer la fin de l'exécution
    }

    /**
     * Affiche le formulaire d'ajout ou d'édition d'article.
     * 
     * @param string|null $error Message d'erreur à afficher (si applicable).
     * @param Post|null $post Instance du modèle Post pour pré-remplir le formulaire (si applicable).
     */
    private function renderForm($error = null, $post = null)
    {
        echo $this->twig->render('dashboard/edit_post.twig', [
            'error' => $error,
            'post' => $post
        ]);
    }

    private function renderAddForm($error = null)
    {
        echo $this->twig->render('dashboard/add_post.twig', [
            'error' => $error
        ]);
    }

    /**
     * Affiche la page 404.
     */
    private function render404()
    {
        http_response_code(404);
        echo $this->twig->render('404.twig');
    }
}
