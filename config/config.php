<?php
// Validation du schéma HTTP ou HTTPS
$scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Validation du nom d'hôte pour éviter les caractères non désirés
$host = filter_var($_SERVER['HTTP_HOST'], FILTER_SANITIZE_STRING);

// Construction de l'URL de base
$base_url = $scheme . '://' . $host;

// Ajouter le chemin du script sans le nom du fichier pour obtenir le chemin de base
$script_name = basename($_SERVER['SCRIPT_NAME']);
$base_url .= str_replace($script_name, '', $_SERVER['SCRIPT_NAME']);

// Définition de la constante BASE_URL
define('BASE_URL', $base_url);

