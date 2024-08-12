<?php

require_once __DIR__ . '/../models/Comment.php';

class CommentController
{
    private $commentModel;
    private $twig;

    /**
     * Constructeur de la classe CommentController.
     * Initialise le modèle de commentaire et le moteur de template Twig.
     * 
     * @param Twig_Environment $twig Le moteur de template Twig.
     */
    public function __construct($twig)
    {
        $this->commentModel = new Comment();
        $this->twig = $twig;
    }

    /**
     * Crée un commentaire.
     * 
     * @param int $postId L'ID du post associé au commentaire.
     * @param int $userId L'ID de l'utilisateur qui crée le commentaire.
     * @param string $content Le contenu du commentaire.
     * @return bool Retourne true si le commentaire est créé avec succès, sinon false.
     */
    public function createComment($postId, $userId, $content)
    {
        $this->commentModel->post_id = $postId;
        $this->commentModel->user_id = $userId;
        $this->commentModel->content = $content;
        // return $this->commentModel->create();

        if ($this->commentModel->create()) {
            return 'Commentaire soumis avec succès, en attente de validation.';
        } else {
            return 'Échec de la soumission du commentaire.';
        }
    }

    /**
     * Récupère les commentaires associés à un post spécifique.
     * 
     * @param int $postId L'ID du post.
     * @return array Les commentaires associés au post.
     */
    public function getCommentsByPostId($postId)
    {
        $this->commentModel->post_id = $postId;
        return $this->commentModel->readByPostId();
    }

    /**
     * Récupère un commentaire spécifique par son ID.
     * 
     * @param int $commentId L'ID du commentaire.
     * @return Comment Le commentaire correspondant.
     */
    public function getCommentsById($commentId)
    {
        $this->commentModel->id = $commentId;
        $this->commentModel->readOne();
        return $this->commentModel;
    }

    /**
     * Récupère les commentaires non validés.
     * 
     * @return array Les commentaires non validés.
     */
    public function getUnValidatedComment(){
        return $this->commentModel->readOnValidated();
    }

    /**
     * Affiche les commentaires non validés.
     * Utilise le moteur de template Twig pour rendre la vue.
     */
    public function showUnvalidatedComments()
    {
        $comments = $this->commentModel->getUnvalidatedComments();
        echo $this->twig->render('comments.twig', ['comments' => $comments]);
    }

    /**
     * Valide un commentaire.
     * Vérifie que la requête est POST et contient un ID de commentaire.
     * Redirige vers la page des commentaires du tableau de bord en cas de succès.
     */
    public function validateComment() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            $commentId = intval($_POST['id']);

            if ($this->commentModel->validateComment($commentId)) {
                header('Location: /dashboard/comments');
                exit();
            } else {
                echo 'Failed to validate comment.';
            }
        }
    }

    /**
     * Supprime un commentaire.
     * Vérifie que la requête est POST et contient un ID de commentaire.
     * Redirige vers la page des commentaires du tableau de bord en cas de succès.
     */
    public function deleteComment() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            $commentId = intval($_POST['id']);

            if ($this->commentModel->delete($commentId)) {
                header('Location: /dashboard/comments');
                exit();
            } else {
                echo 'Failed to delete comment.';
            }
        }
    }

}

