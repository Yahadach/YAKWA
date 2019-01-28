<?php

function getFilm($twig,$Film_id){

try{
$pdo = new PDO('mysql:host=localhost;dbname=yakwa;charset=utf8', 'root', '');
}
catch(Exception $e){
die('Erreur : '.$e->getMessage());
}

$Request = $pdo->query("SELECT * FROM films WHERE films.id = $Film_id" )->fetch();
$Actors = $pdo->query("SELECT acteurs.nom FROM acteurs,films_acteurs WHERE films_acteurs.ID_Film = $Film_id AND acteurs.id=films_acteurs.ID_Acteur")->fetchAll();
$Real = $pdo->query("SELECT realisateurs.nom FROM realisateurs,films_realisateurs WHERE films_realisateurs.ID_Film = $Film_id AND realisateurs.id=films_realisateurs.ID_Realisateur")->fetchAll();
$Genre = $pdo->query("SELECT genres.nom FROM genres,films_genres WHERE films_genres.ID_Film = $Film_id AND genres.id=films_genres.ID_Genre")->fetchAll();
echo $twig->render('movie.html.twig', [
'film' => $Request,
'actors' => $Actors,
'reals' => $Real,
'genres' => $Genre,
'user' => $_SESSION['user_name']
]);
var_dump($Genre);

}

function getFilms($twig){
    var_dump($_SESSION['user_name']);
try{
$pdo = new PDO('mysql:host=localhost;dbname=yakwa;charset=utf8', 'root', '');
}
catch(Exception $e){
die('Erreur : '.$e->getMessage());
}

$allMovies = $pdo->query("SELECT * FROM films")->fetchAll();
echo $twig->render('movies.html.twig', ['films' => $allMovies,'user' => $_SESSION['user_name']]);
}

    function registerMovie($twig){

        echo $twig->render('addMovie.html.twig');

    }

function addMovie($twig){


    try{
        $pdo = new PDO('mysql:host=localhost;dbname=yakwa2;charset=utf8', 'root', '');
        }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    $acteur = $_POST['acteurs'];
    $error_state=true;

    // Si l'acteur existe //
    $acteur_data = $pdo->query("SELECT nom 
    FROM acteurs 
    WHERE nom = '$acteur'")->fetch();
    //var_dump($acteur_data);

    $movie_title = $_POST['titre'];
    $movie = $pdo->query("SELECT titre 
    FROM films 
    WHERE titre = '$movie_title'")->fetch();


    if($movie == NULL){


        if (preg_match("#(?:(?:19|20)[0-9]{2})#", $_POST["annee"])){

            if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#i", $_POST["genre"])) {
                
                if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#i", $_POST["realisateurs"])){ 

                    if(preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#i", $acteur) ){

                        if(preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#i", $_POST['synopsis'])){

                            $Request = $pdo->query("INSERT INTO acteurs VALUES ('','$acteur')");
                            echo $twig->render('addMovie.html.twig');
                        
                        }else{
                            
                            echo $twig->render('addMovie.html.twig', ['inputs' => $_POST,
                            'error' => "Saisie invalide: veuillez éviter la saisie de caractères spéciaux",'dataActeur' => $acteur_data]);
                        }
                
                    }else{
                        echo $twig->render('addMovie.html.twig', ['inputs' => $_POST,
                        'error' => "mauvaise saisie",'dataActeur' => $acteur_data]);
                    }


                }else{
                    //$error_realisateur=false;
                    echo $twig->render('addMovie.html.twig', ['inputs' => $_POST,
                    'errorRealisateursMessage' => "Saisie invalide: veuillez éviter la saisie de caractères spéciaux",'dataActeur' => $acteur_data]);
                }

            }else{
                
                //$error_genre = false;
                echo $twig->render('addMovie.html.twig', ['inputs' => $_POST,
                'errorGenreMessage' => "Saisie invalide: veuillez éviter la saisie de caractères spéciaux",'dataActeur' => $acteur_data]);
            }

        }else{
            echo $twig->render('addMovie.html.twig', ['inputs' => $_POST, 'errorAnnee' => "Saisie invalide: Veuillez saisir une année valide"]);
        }
    }else{
        echo $twig->render('addMovie.html.twig', ['errorExist' => "Ce film éxiste déjà",'dataMovie' => $movie]);
    }



















    if(preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#i", $acteur) ){

        $Request = $pdo->query("INSERT INTO acteurs VALUES ('','$acteur')");
        echo $twig->render('addMovie.html.twig');

    }else{
        echo $twig->render('addMovie.html.twig', [
            'error' => "IL EXISTE DEJA LOL",'dataActeur' => $acteur_data]);
    }

}