<?php

$uri = $_SERVER['REQUEST_URI'];

switch($uri){

    case "/" :
        include "controllers/userController.php";
            verifUser();
        break;

    case "/YAKWA/babar" :
        include "controllers/userController.php";
            verifUser();
        break;
        
        
    case "/films":
        include "controllers/filmsControler.php";
        getFilms();
        break;
    
    case "/toto":
        echo "Connaissez vous la dernière blague de toto?";
        break;
        
    case "/login":
        include "controllers/filmsControler.php";
        login();
        break;
        
    default :
            require_once 'vendor/autoload.php';
            $loader = new Twig_Loader_Filesystem('views');
            $twig = new Twig_Environment($loader);   
    
            echo $twig->render('accueil.html.twig');
    
        
        
}
