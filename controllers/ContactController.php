<?php
// app/controllers/ContactController.php

class ContactController
{
    private $twig;

    /**
     * Constructeur de la classe ContactController.
     * Initialise le moteur de template Twig.
     * 
     * @param Twig_Environment $twig Le moteur de template Twig.
     */
    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    /**
     * Affiche le formulaire de contact.
     * Utilise le moteur de template Twig pour rendre la vue du formulaire.
     */
    public function showContactForm()
    {
        $flash_message = isset($_SESSION['flash_message']) ? $_SESSION['flash_message'] : [];
        // Réinitialisez les messages flash après les avoir récupérés
        $_SESSION['flash_message'] = [];
        
        echo $this->twig->render('frontoffice/form.twig', ['flash_message' => $flash_message]);
    }

    /**
     * Traite l'envoi du formulaire de contact.
     * Vérifie les champs du formulaire, envoie un email et affiche un message de succès ou d'erreur.
     * 
     * @return bool Retourne true si le message est envoyé avec succès, sinon false.
     */
    public function sendContactForm()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return $this->renderContactForm(['error' => 'La méthode de la requête doit être POST.']);
        }

        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            return $this->renderContactForm(['error' => 'Certains champs sont vides ou invalides!']);
        }

        $name = strip_tags(htmlspecialchars($_POST['name']));
        $email_address = strip_tags(htmlspecialchars($_POST['email']));
        $message = strip_tags(htmlspecialchars($_POST['message']));

        $to = 'falonne.muyombo@gmail.com'; // Remplacez par votre adresse email
        $email_subject = "Formulaire de Contact Projet Blog : $name";
        $email_body = "Vous avez reçu un nouveau message de Projet Blog.\n\n"."Voici les détails :\n\nNom: $name\n\nEmail: $email_address\n\nMessage:\n$message";
        $headers = "From: falonne.muyombo@gmail.com\n";
        $headers .= "Reply-To: $email_address";

        try {
            if (mail($to, $email_subject, $email_body, $headers)) {
                $this->setFlashMessage('success', 'Message envoyé avec succès!');
            } else {
                $this->setFlashMessage('error', 'Échec de l\'envoi du message!');
            }
            $this->redirect('/contact');
        } catch (Exception $e) {
            $this->handleError($e->getMessage());
        }
    }

    /**
     * Définit un message flash à afficher sur la page suivante.
     * 
     * @param string $type Le type de message ('success' ou 'error').
     * @param string $message Le message à stocker.
     */
    private function setFlashMessage($type, $message)
    {
        $_SESSION['flash_message'] = [$type => $message];
    }

    /**
     * Redirige l'utilisateur vers une nouvelle URL.
     * 
     * @param string $url L'URL vers laquelle rediriger.
     */
    private function redirect($url)
    {
        header('Location: ' . $url);
        // Enlevez exit() pour permettre à l'appelant de gérer la fin de l'exécution
    }

    /**
     * Affiche le formulaire de contact avec un message d'erreur.
     * 
     * @param array $context Le contexte à passer à la vue, y compris les messages d'erreur.
     */
    private function renderContactForm($context = [])
    {
        echo $this->twig->render('frontoffice/form.twig', $context);
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
