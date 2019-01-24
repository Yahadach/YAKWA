<?php

require("models/twig.php");

$uri = $_SERVER['REQUEST_URI'];
$uriExplode = explode( "/" , $uri);
$id=$uriExplode[1];

session_start();

switch($id){

    case "":
    header('Location: /home');
    break;

    case "home":
        include "controllers/HOME.php";
        getHome();
    break;

    case "connexion" :
        include "controllers/userController.php";
        verifConnexion($twig);
    break;

    case "deconnexion" :
        include "controllers/userController.php";
        include "controllers/HOME.php";
        deleteSession();
        getHome();
    break;

    case "proposer":
        include "controllers/userController.php";
        getSession($twig);
    break;

    case "inscription":
        include "controllers/userController.php";
        register($twig);
    break;

    case "process":
        include "controllers/userController.php";
        include "controllers/HOME.php";
        createUser();
        getHome();
    break;

    case "films":
        include "controllers/filmsControler.php";
        getFilms($twig);
    break;


    default :
        header('Location: /home');
    exit;
    
        
        
}
