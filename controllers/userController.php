<?php


function verifConnexion($twig){


    try{
        $pdo = new PDO('mysql:host=localhost;dbname=yakwa;charset=utf8', 'root', '');
        }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
        
        
        $saisie_login = $_POST['nom'];
        $saisie_mdp = $_POST['password'];
            
            $Request = $pdo->query("SELECT * 
            FROM users 
            WHERE login = '$saisie_login' 
            AND mot_de_passe = '$saisie_mdp' ")->fetch();

            $user_name = $Request['login'];
            var_dump($user_name);

            $_SESSION['user_name'] = $user_name;
                
                //header('Location: ../'); 
                echo $twig->render('base.html.twig', [
                    'user' => $user_name,
                    'session' => $_SESSION
                ]);
            
}

function getSession($twig){

    $user_name = $_SESSION['user_name'];

    echo $twig->render('base.html.twig', [
        'user' => $user_name,
        'session' => $_SESSION
    ]);
}

function deleteSession(){
    session_destroy();
}

function register($twig){

    echo $twig->render('inscription.html.twig');

}

function createUSer(){

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=yakwa;charset=utf8', 'root', '');
        }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $mail = $_POST['mail'];

    $Request = $pdo->query("INSERT INTO users VALUES ('','$login','$mdp','$mail')");

}

?>