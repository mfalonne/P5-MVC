<?php
// app/controllers/ContactController.php

class ContactController {
    private $twig;

    /**
     * Constructeur de la classe ContactController.
     * Initialise le moteur de template Twig.
     * 
     * @param Twig_Environment $twig Le moteur de template Twig.
     */
    public function __construct($twig) {
        $this->twig = $twig;
    }

    /**
     * Affiche le formulaire de contact.
     * Utilise le moteur de template Twig pour rendre la vue du formulaire.
     */
   public function showContactForm() {
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
    public function sendContactForm() {

        // Vérifie que la requête est bien une méthode POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo $this->twig->render('frontoffice/form.twig');
            return false;
        }

        // Vérifie si les champs obligatoires sont remplis et si l'email est valide
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo $this->twig->render('frontoffice/form.twig', ['error' => 'Certains champs sont vides ou invalides!']);
            return false;
        }

        // Nettoie les données du formulaire
        $name = strip_tags(htmlspecialchars($_POST['name']));
        $email_address = strip_tags(htmlspecialchars($_POST['email']));
        $message = strip_tags(htmlspecialchars($_POST['message']));

        // Informations de l'email
        $to = 'falonne.muyombo@gmail.com'; // Remplacez par votre adresse email
        $email_subject = "Formulaire de Contact Projet Blog :  $name";
        $email_body = "Vous avez reçu un nouveau message de Projet Blog.\n\n"."Voici les détails :\n\nNom: $name\n\nEmail: $email_address\n\nMessage:\n$message";
        $headers = "From: falonne.muyombo@gmail.com\n";
        $headers .= "Reply-To: $email_address";
        
        // Redirection après soumission
        if (mail($to, $email_subject, $email_body, $headers)) {
            $_SESSION['flash_message'] = ['success' => 'Message envoyé avec succès!'];
            header('Location: /contact');
            exit();
        } else {
            $_SESSION['flash_message'] = ['error' => 'Échec de l\'envoi du message!'];
            header('Location: /contact');
            exit();
        }
    }
}

