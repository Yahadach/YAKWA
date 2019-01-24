<?php

function getFilm($twig){
    
   try{
$pdo = new PDO('mysql:host=localhost;dbname=yakwa;charset=utf8', 'root', '');
}
catch(Exception $e){
die('Erreur : '.$e->getMessage());
}

    $Request = $pdo->query("SELECT * FROM films");
    
    echo $twig->render('movie.html.twig', [
        'users' => $Request,
        'babar' => "Ca trompe énormément",
        'numéro' => "1"
    ]);
    
}

function getFilms($twig){
       try{
           $pdo = new PDO('mysql:host=localhost;dbname=yakwa;charset=utf8', 'root', '');
       }
catch(Exception $e){
die('Erreur : '.$e->getMessage());
}

    $allMovies = $pdo->query("SELECT * FROM films")->fetchAll();
    echo $twig->render('movies.html.twig', ['films' => $allMovies]);
}
