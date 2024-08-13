<?php

// Inclusion du fichier de modèle User
require_once __DIR__ . '/../models/User.php';

// Déclaration de la classe UserController
class UserController
{
    private $userModel; // Modèle pour la gestion des utilisateurs
    private $twig; // Moteur de templates Twig

    /**
     * Constructeur de la classe UserController.
     * Initialise une nouvelle instance du modèle User et le moteur de templates Twig.
     * 
     * @param Twig_Environment $twig Le moteur de templates Twig.
     */
    public function __construct($twig)
    {
        $this->userModel = new User(); // Instanciation du modèle d'utilisateur
        $this->twig = $twig; // Injection du moteur de templates Twig
    }

    /**
     * Méthode pour inscrire un nouvel utilisateur.
     * Vérifie les données de la requête POST et crée un nouvel utilisateur.
     */
    public function register()
    {
        $username = $_POST['username'] ?? ''; // Récupère le nom d'utilisateur depuis les données de formulaire
        $password = $_POST['password'] ?? ''; // Récupère le mot de passe depuis les données de formulaire
        $isAdmin = isset($_POST['is_admin']) ? 1 : 0; // Vérifie si l'utilisateur doit être administrateur

        // Création de l'utilisateur dans la base de données via le modèle
        if ($this->userModel->create($username, $password, $isAdmin)) {
            $this->redirect('/login'); // Redirection vers la page de connexion après inscription
        } else {
            $this->renderRegisterForm('Inscription échouée. Veuillez réessayer.');
        }
    }

    /**
     * Méthode pour connecter un utilisateur.
     * Vérifie les données de la requête POST et connecte l'utilisateur si les informations sont correctes.
     */
    public function login()
    {
        $username = $_POST['username'] ?? null; // Récupère le nom d'utilisateur depuis les données de formulaire
        $password = $_POST['password'] ?? null; // Récupère le mot de passe depuis les données de formulaire

        // Vérifie si les champs sont vides
        if (empty($username) || empty($password)) {
            $this->renderLoginForm('Veuillez remplir tous les champs.');
            return;
        }

        // Récupère tous les utilisateurs
        $users = $this->userModel->read();
        foreach ($users as $user) {
            // Vérifie le nom d'utilisateur et le mot de passe
            if ($user['username'] === $username && password_verify($password, $user['password'])) {
                // Initialise la session utilisateur
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['is_admin'] = $user['is_admin'];

                // Redirection selon le rôle de l'utilisateur
                $this->redirect($_SESSION['is_admin'] ? '/dashboard' : '/');
                return;
            }
        }

        // Affiche la vue de connexion avec un message d'erreur en cas d'échec
        $this->renderLoginForm('Nom d’utilisateur ou mot de passe incorrect.');
    }

    /**
     * Méthode pour mettre à jour un utilisateur.
     * 
     * @param int $id L'ID de l'utilisateur à mettre à jour.
     * @param string $username Le nouveau nom d'utilisateur.
     * @param string $password Le nouveau mot de passe.
     * @param bool $isAdmin Indique si l'utilisateur est administrateur.
     * @return bool Retourne true si la mise à jour est réussie, false sinon.
     */
    public function updateUser($id, $username, $password, $isAdmin)
    {
        $this->userModel->id = $id;
        $this->userModel->username = $username;
        $this->userModel->password = $password;
        $this->userModel->is_admin = $isAdmin;

        // Mise à jour de l'utilisateur dans la base de données via le modèle
        return $this->userModel->update();
    }

    /**
     * Méthode pour supprimer un utilisateur.
     * 
     * @param int $id L'ID de l'utilisateur à supprimer.
     * @return bool Retourne true si la suppression est réussie, false sinon.
     */
    public function deleteUser($id)
    {
        $this->userModel->id = $id;
        // Suppression de l'utilisateur dans la base de données via le modèle
        return $this->userModel->delete();
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
     * Affiche le formulaire d'inscription avec éventuellement un message d'erreur.
     * 
     * @param string|null $error Message d'erreur à afficher (si applicable).
     */
    private function renderRegisterForm($error = null)
    {
        echo $this->twig->render('frontoffice/register.twig', [
            'error' => $error,
        ]);
    }

    /**
     * Affiche le formulaire de connexion avec éventuellement un message d'erreur.
     * 
     * @param string|null $error Message d'erreur à afficher (si applicable).
     */
    private function renderLoginForm($error = null)
    {
        echo $this->twig->render('frontoffice/login.twig', [
            'error' => $error,
        ]);
    }
}
