<?php

require_once __DIR__ . '/../models/Comment.php';

class CommentController
{
    private $commentModel;
    private $twig;

    public function __construct($twig)
    {
        $this->commentModel = new Comment();
        $this->twig = $twig;
    }

    public function createComment($postId, $userId, $content)
    {
        $this->commentModel->post_id = $postId;
        $this->commentModel->user_id = $userId;
        $this->commentModel->content = $content;

        return $this->commentModel->create()
            ? 'Commentaire soumis avec succès, en attente de validation.'
            : 'Échec de la soumission du commentaire.';
    }

    public function getCommentsByPostId($postId)
    {
        $this->commentModel->post_id = $postId;
        return $this->commentModel->readByPostId();
    }

    public function getCommentsById($commentId)
    {
        $this->commentModel->id = $commentId;
        $this->commentModel->readOne();
        return $this->commentModel;
    }

    public function getUnValidatedComments()
    {
        return $this->commentModel->readOnValidated();
    }

    public function showUnvalidatedComments()
    {
        $comments = $this->getUnValidatedComments();
        echo $this->twig->render('comments.twig', ['comments' => $comments]);
    }

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
        // Ne pas utiliser exit() ici; la redirection doit se faire normalement
        // mais soyez conscient que le code après cette méthode sera également exécuté
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
