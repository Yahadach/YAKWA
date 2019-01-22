<?php

function getUsers(){
    
   try{
$pdo = new PDO('mysql:host=localhost;dbname=yakwa;charset=utf8', 'root', '');
}
catch(Exception $e){
die('Erreur : '.$e->getMessage());
}
    
    require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);
    
    
    $Request = $pdo->query("SELECT * FROM users");
    
    echo $twig->render('accueil.html.twig', [
        'users' => $Request,
        'babar' => "Ca trompe énormément",
        'numéro' => "1"
    ]);
    
}


function getFilms(){
       try{
           $pdo = new PDO('mysql:host=localhost;dbname=yakwa;charset=utf8', 'root', '');
       }
catch(Exception $e){
die('Erreur : '.$e->getMessage());
}
    
    require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);
    
    
    $test = $pdo->query("SELECT * FROM films");
    echo $twig->render('accueil.html.twig', ['films' => $test]);
}

function login(){
       try{
           $pdo = new PDO('mysql:host=localhost;dbname=yakwa;charset=utf8', 'root', '');
       }
catch(Exception $e){
die('Erreur : '.$e->getMessage());
}
    
    require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);
    
 
    echo $twig->render('accueil.html.twig', ['resultatLogin' => $test]);
}

?>