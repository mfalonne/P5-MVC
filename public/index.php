<?php

// Inclusion des fichiers nécessaires
require_once __DIR__ . '/../vendor/autoload.php'; // Autoloader de Composer pour les dépendances
require_once __DIR__ . '/../controllers/UserController.php'; // Contrôleur pour la gestion des utilisateurs
require_once __DIR__ . '/../controllers/FrontController.php'; // Contrôleur pour la gestion des pages frontales
require_once __DIR__ . '/../controllers/PostController.php'; // Contrôleur pour la gestion des articles
require_once __DIR__ . '/../controllers/CommentController.php'; // Contrôleur pour la gestion des commentaires
require_once __DIR__ . '/../config/config.php'; // Fichier de configuration

// Démarrage de la session
session_start();

// Création de l'instance de Twig pour le rendu des templates
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../views'); // Définition du répertoire des vues
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/../cache', // Chemin vers le répertoire de cache
    'debug' => true, // Activer le mode debug (mettre à false en production)
]);

// Ajout de variables globales pour Twig
$twig->addGlobal('session', $_SESSION); // Ajouter la session en tant que variable globale
$twig->addGlobal('BASE_URL', BASE_URL); // Ajouter l'URL de base en tant que variable globale

// Instance des contrôleurs
$userController = new UserController($twig); // Contrôleur pour les utilisateurs
$frontController = new FrontController($twig); // Contrôleur pour les pages frontales
$postController = new PostController($twig); // Contrôleur pour les articles
$commentController = new CommentController($twig); // Contrôleur pour les commentaires

// Parsing de l'URL pour extraire l'identifiant du post si nécessaire
$uri = $_SERVER['REQUEST_URI']; // Récupération de l'URL demandée
$uriParts = explode('?', $uri); // Séparation de l'URL et des paramètres de requête
$route = $uriParts[0]; // Route (partie avant les paramètres)
$queryString = $uriParts[1] ?? ''; // Chaîne de requête (paramètres)

// Routage simple pour gérer les différentes pages et actions
switch ($route) {
    case '/':
        // Page d'accueil
        $lastPosts = $frontController->getLastPosts(); // Récupérer les derniers articles
        echo $twig->render('frontoffice/home.twig', ['posts' => $lastPosts]); // Rendu de la vue home.twig
        break;
    case '/blog':
        // Page du blog
        $posts = $frontController->getAllPosts(); // Récupérer tous les articles
        echo $twig->render('frontoffice/blog.twig', ['posts' => $posts]); // Rendu de la vue blog.twig
        break;
    case '/contact':
        // Page de contact
        echo $twig->render('frontoffice/contact.twig'); // Rendu de la vue contact.twig
        break;
    case '/blog/view':
        // Affichage d'un article spécifique
        parse_str($queryString, $queryParams); // Parse la chaîne de requête pour obtenir les paramètres
        $postId = $queryParams['id'] ?? null; // Récupérer l'ID de l'article
        if ($postId) {
            $post = $frontController->getPostById($postId); // Récupérer l'article par ID
            $comments = $commentController->getCommentsByPostId($postId);
            echo $twig->render('frontoffice/post_detail.twig', ['post' => $post, 'comments'=> $comments]); // Rendu de la vue post_detail.twig
        } else {
            http_response_code(404); // Répondre avec un code 404 si l'article n'est pas trouvé
            echo $twig->render('404.twig'); // Rendu de la vue 404.twig
        }
        break;
    case '/add-comment':
        // Ajout d'un commentaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Assurez-vous que l'utilisateur est connecté pour pouvoir commenter
            if (isset($_SESSION['user_id'])) {
                $postId = $_POST['post_id'];
                $userId = $_SESSION['user_id'];
                $content = $_POST['content'];
                if ($commentController->createComment($postId, $userId, $content)) {
                    // Redirection vers l'article après ajout du commentaire
                    header("Location: /blog/view?id=$postId");
                } else {
                    // Gérer l'erreur d'ajout du commentaire
                    echo $twig->render('error.twig', ['message' => 'Erreur lors de l\'ajout du commentaire.']);
                }
            } else {
                // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
                header('Location: /login');
            }
        } else {
            http_response_code(405); // Méthode non autorisée
        }
        break;
    case '/edit-comment':
        // Modification d'un commentaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Assurez-vous que l'utilisateur est connecté pour pouvoir modifier un commentaire
            if (isset($_SESSION['user_id'])) {
                $commentId = $_POST['comment_id'];
                $userId = $_SESSION['user_id'];
                $content = $_POST['content'];

                // Vérifiez que le commentaire appartient à l'utilisateur connecté
                $comment = $commentController->getCommentsByPostId($postId);
                if ($comment && $comment['user_id'] === $userId) {
                    if ($commentController->updateComment($comment, $content)) {
                        // Redirection vers l'article après modification du commentaire
                        header("Location: /blog/view?id={$comment['post_id']}");
                    } else {
                        // Gérer l'erreur de modification du commentaire
                        echo $twig->render('error.twig', ['message' => 'Erreur lors de la modification du commentaire.']);
                    }
                } else {
                    // Gérer le cas où le commentaire n'appartient pas à l'utilisateur ou n'existe pas
                    echo $twig->render('error.twig', ['message' => 'Commentaire introuvable ou non autorisé.']);
                }
            } else {
                // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
                header('Location: /login');
            }
        } else {
                $commentId = $_GET['id'] ?? null;
                if ($commentId) {
                    // Affiche la vue d'édition d'article avec les détails de l'article à éditer
                    $comment = $commentController->getCommentsById($commentId);
                    var_dump($comment);die();
                    echo $twig->render('frontoffice/edit_comment.twig', ['comment' => $comment]);
                } else {
                    // Affiche la vue 404 si l'ID de l'article est manquant
                    http_response_code(404);
                    echo $this->twig->render('404.twig');
                }
            }
        break;
    case '/delete-comment':
        // Suppression d'un commentaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Assurez-vous que l'utilisateur est connecté pour pouvoir supprimer un commentaire
            if (isset($_SESSION['user_id'])) {
                $commentId = $_POST['comment_id'];
                $userId = $_SESSION['user_id'];

                // Vérifiez que le commentaire appartient à l'utilisateur connecté
                $comment = $commentController->getCommentsById($commentId);
                if ($comment && $comment['user_id'] === $userId) {
                    if ($commentController->deleteComment($commentId)) {
                        // Redirection vers l'article après suppression du commentaire
                        header("Location: /blog/view?id={$comment['post_id']}");
                    } else {
                        // Gérer l'erreur de suppression du commentaire
                        echo $twig->render('error.twig', ['message' => 'Erreur lors de la suppression du commentaire.']);
                    }
                } else {
                    // Gérer le cas où le commentaire n'appartient pas à l'utilisateur ou n'existe pas
                    echo $twig->render('error.twig', ['message' => 'Commentaire introuvable ou non autorisé.']);
                }
            } else {
                // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
                header('Location: /login');
            }
        } else {
            http_response_code(405); // Méthode non autorisée
        }
        break;

    case '/login':
        // Page de connexion
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userController->login(); // Appeler la méthode login du contrôleur utilisateur
        } else {
            echo $twig->render('frontoffice/login.twig'); // Rendu de la vue login.twig
        }
        break;
    case '/register':
        // Page d'inscription
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userController->register(); // Appeler la méthode register du contrôleur utilisateur
        } else {
            echo $twig->render('frontoffice/register.twig'); // Rendu de la vue register.twig
        }
        break;
    case '/logout':
        // Déconnexion de l'utilisateur
        $_SESSION = []; // Efface toutes les données de session
        session_destroy(); // Détruit la session
        header('Location: /login'); // Redirige vers la page de connexion
        exit();
        break;
    case '/dashboard':
        // Page du tableau de bord (admin)
        if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
            header('Location: /login'); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté ou n'est pas admin
            exit();
        }
        $posts = $frontController->getAllPosts(); // Récupérer tous les articles
        echo $twig->render('dashboard/dashboard.twig', ['posts' => $posts]); // Rendu de la vue dashboard.twig
        break;
    case '/dashboard/post/add':
        // Ajout d'un nouvel article
        if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
            header('Location: /login'); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté ou n'est pas admin
            exit();
        }
        $postController->createPost(); // Appeler la méthode createPost du contrôleur article
        break;
    case '/dashboard/post/edit':
        // Édition d'un article existant
        if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
            header('Location: /login'); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté ou n'est pas admin
            exit();
        }
        $postController->editPost(); // Appeler la méthode editPost du contrôleur article
        break;
    case '/dashboard/post/delete':
        // Suppression d'un article
        if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
            header('Location: /login'); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté ou n'est pas admin
            exit();
        }
        $postController->deletePost(); // Appeler la méthode deletePost du contrôleur article
        break;
    case '/dashboard/post':
        // Liste des articles dans le tableau de bord
        if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
            header('Location: /login'); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté ou n'est pas admin
            exit();
        }
        $posts = $frontController->getAllPosts(); // Récupérer tous les articles
        echo $twig->render('dashboard/posts.twig', ['posts' => $posts]); // Rendu de la vue dashboard/posts.twig
        break;
    default:
        // Page non trouvée (404)
        http_response_code(404); // Répondre avec un code 404
        echo $twig->render('404.twig'); // Rendu de la vue 404.twig
}

?>
