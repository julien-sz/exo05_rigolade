<?php
session_start(); 
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('UTC');

define('NOM_DB', 'phprigolo');
define('UTILISATEUR_DB', 'xxxxxx');
define('MDP_DB', 'xxxxxxxx');


$dbconnexion = new PDO('mysql:host=localhost;port=3301;dbname='.NOM_DB, UTILISATEUR_DB, MDP_DB, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$NbreElementLigne = 4;

// ----------------  Début tableau ajouté pour référencement de la première page du site rigolade.demo/index.php -----------//
$menu['exoPHPrigolo'] = array();
$menu['exoPHPrigolo']['link'] = '/';
$menu['exoPHPrigolo']['titre'] = 'La grosse rigolade';
$menu['exoPHPrigolo']['description'] = 'poilade assurée';
$menu['exoPHPrigolo']['keywords'] = 'dépression, burn-out,psychose';
// ----------------  Fin Tableau ajouté pour référencement de la première page du site rigolade.demo/index.php -----------//
$menu['Les helpers'] = array();
$menu['Les helpers']['link'] = '/helpers/';
$menu['Les helpers']['titre'] = 'Les helpers';
$menu['Les helpers']['description'] = 'Exercice sur le PHP';
$menu['Les helpers']['keywords'] = 'PHP,exo,exercice';
$menu['La classe']= array();
$menu['La classe']['link'] = '/classe/';
$menu['La classe']['titre'] = 'La classe';
$menu['La classe']['description'] = 'Tableau de données personnelles';
$menu['La classe']['keywords'] = 'Prénom, Nom, Âge';
$menu['La note'] = array();
$menu['La note']['link'] = '/note/';
$menu['La note']['titre'] = 'La note';
$menu['La note']['description'] = 'Calcul de la note';
$menu['La note']['keywords'] = 'Sanction, Punition, Rien-branling';
$menu['Le menu'] = array();
$menu['Le menu']['link'] = '/menu/';
$menu['Le menu']['titre'] = 'Le menu';
$menu['Le menu']['description'] = 'Adaptez l\'affichage du menu en fonction d\'une variable';
$menu['Le menu']['keywords'] = 'Variables, Tableaux, HTML';
$menu['Le référencement'] = array();
$menu['Le référencement']['link'] = '/referencement/';
$menu['Le référencement']['titre'] = 'Référencement';
$menu['Le référencement']['description'] = 'Rendre les métas dynamiques';
$menu['Le référencement']['keywords'] = 'switch, url';
$menu['Les vignettes'] = array();
$menu['Les vignettes']['link'] = '/vignettes/';
$menu['Les vignettes']['titre'] = 'Les vignettes';
$menu['Les vignettes']['description'] = 'Enregistrer et afficher des vignettes';
$menu['Les vignettes']['keywords'] = 'script, image, upload, download, display';
$menu['Le morpion'] = array();
$menu['Le morpion']['link'] = '/morpion/';
$menu['Le morpion']['titre'] = 'Le morpion';
$menu['Le morpion']['description'] = 'Un jeu de morpion en PHP';
$menu['Le morpion']['keywords'] = 'Ne vous pendez pas tout de suite, attendez la fin de l\'épidémie!';
$menu['news'] = array();
$menu['news']['link'] = '/news/';
$menu['news']['titre'] = 'Les news';
$menu['news']['description'] = 'genre de newsfeed';
$menu['news']['keywords'] = 'news, info, liens';
$menu['fichierCSV'] = array();
$menu['fichierCSV']['link'] = '/fichier-csv/';
$menu['fichierCSV']['titre'] = 'Fichier CSV';
$menu['fichierCSV']['description'] = 'Outil de tri et de consultation de données personnelles';
$menu['fichierCSV']['keywords'] = 'ID de commande, Nom, Prénom, Téléphone';
?>
