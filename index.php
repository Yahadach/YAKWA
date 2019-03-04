<?php

require("models/twig.php");
require("models/database.php");

$uri = $_SERVER['REQUEST_URI'];
$uriExplode = explode( "/" , $uri);
$id=$uriExplode[1];

session_start();

switch($id){

    case "":
    header('Location: /home');
    break;

    case "home":
    include "controllers/userController.php";
    include "controllers/HOME.php";
    getHome();
    break;

    case "connexion" :
        include "controllers/userController.php";
        header('Location: /home');
        verifConnexion($twig,$pdo);
    break;

    case "deconnexion" :
        include "controllers/userController.php";
        include "controllers/HOME.php";
        deleteSession();
        getHome();
    break;

    case "proposer":
        include "controllers/userController.php";
        include "controllers/filmsControler.php";
        registerMovie($twig);
        //getSession($twig);
    break;

    case "processAdd":
        include "controllers/userController.php";
        include "controllers/filmsControler.php";
        addMovie($twig,$pdo);
        //getSession($twig);
    break;

    case "inscription":
        include "controllers/userController.php";
        register($twig);
    break;

    case "process":
        include "controllers/userController.php";
        include "controllers/HOME.php";
        createUser($twig,$pdo);
    break;

    case "films":
        include "controllers/userController.php";

        if(isset($uriExplode[2])) {
        include "controllers/filmsControler.php";
        getFilm($twig,$uriExplode[2],$pdo);
        //getSession($twig);
        }
        else {
        include "controllers/filmsControler.php";
        //getSession($twig);
        getFilms($twig,$pdo);
        //getSession($twig);
        }
    break;

    case "search":
        include "controllers/filmsControler.php";
        searchMovie($twig);
    break;

    case "random":
        include "controllers/filmsControler.php";
        randomMovie($twig);
    break;


    default :
        header('Location: /home');
    exit;       
}