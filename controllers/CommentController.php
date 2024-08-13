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
     * @return string Message de succès ou d'échec.
     */
    public function createComment($postId, $userId, $content)
    {
        $this->commentModel->post_id = $postId;
        $this->commentModel->user_id = $userId;
        $this->commentModel->content = $content;

        return $this->commentModel->create()
            ? 'Commentaire soumis avec succès, en attente de validation.'
            : 'Échec de la soumission du commentaire.';
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
    public function getUnValidatedComments()
    {
        return $this->commentModel->readOnValidated();
    }

    /**
     * Affiche les commentaires non validés.
     * Utilise le moteur de template Twig pour rendre la vue.
     */
    public function showUnvalidatedComments()
    {
        $comments = $this->getUnValidatedComments();
        echo $this->twig->render('comments.twig', ['comments' => $comments]);
    }

    /**
     * Valide un commentaire.
     * Vérifie que la requête est POST et contient un ID de commentaire.
     * Redirige vers la page des commentaires du tableau de bord en cas de succès.
     */
    public function validateComment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            $commentId = intval($_POST['id']);

            try {
                if ($this->commentModel->validateComment($commentId)) {
                    $this->redirect('/dashboard/comments');
                } else {
                    throw new Exception('Échec de la validation du commentaire.');
                }
            } catch (Exception $e) {
                $this->handleError($e->getMessage());
            }
        } else {
            $this->handleError('ID du commentaire manquant.');
        }
    }

    /**
     * Supprime un commentaire.
     * Vérifie que la requête est POST et contient un ID de commentaire.
     * Redirige vers la page des commentaires du tableau de bord en cas de succès.
     */
    public function deleteComment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            $commentId = intval($_POST['id']);

            try {
                if ($this->commentModel->delete($commentId)) {
                    $this->redirect('/dashboard/comments');
                } else {
                    throw new Exception('Échec de la suppression du commentaire.');
                }
            } catch (Exception $e) {
                $this->handleError($e->getMessage());
            }
        } else {
            $this->handleError('ID du commentaire manquant.');
        }
    }

    /**
     * Redirige l'utilisateur vers une nouvelle URL.
     * 
     * @param string $url L'URL vers laquelle rediriger.
     */
    private function redirect($url)
    {
        header('Location: ' . $url);
        exit(); // Assurez-vous qu'aucun autre output n'a été envoyé avant cet appel.
    }

    /**
     * Gère les erreurs en les enregistrant et en affichant un message d'erreur.
     * 
     * @param string $message Le message d'erreur à afficher.
     */
    private function handleError($message)
    {
        // Log the error message
        error_log('[' . date('Y-m-d H:i:s') . '] ' . $message . PHP_EOL, 3, __DIR__ . '/logs/error_log.txt');
        
        // Display a user-friendly message
        echo 'Une erreur est survenue. Veuillez réessayer plus tard.';
    }
}
