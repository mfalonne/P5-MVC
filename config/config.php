<?php
// Détection automatique du chemin de base en fonction de l'environnement

// Initialisation de la variable $base_url avec le protocole HTTP ou HTTPS selon le cas
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];

// Ajout du chemin du script en supprimant le nom du script lui-même pour obtenir le chemin de base
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

// Définition de la constante BASE_URL avec la valeur du chemin de base calculé
define('BASE_URL', $base_url);
