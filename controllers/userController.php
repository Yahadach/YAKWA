<?php


function verifConnexion($twig,$pdo){
        
        $saisie_login = $_POST['nom'];
        $saisie_mdp = $_POST['password'];
            
            $Request = $pdo->query("SELECT * 
            FROM users 
            WHERE login = '$saisie_login' 
            AND mot_de_passe = '$saisie_mdp' ")->fetch();

            $user_name = $Request['login'];
            //var_dump($user_name);

            $_SESSION['user_name'] = $user_name;
            //var_dump($_SESSION[user_name]);
                
                //header('Location: ../'); 
                echo $twig->render('base.html.twig', [
                    'user' => $user_name,
                    'session' => $_SESSION
                ]);

                header('Location: /home');
            
}

function getSession($twig){
    

     if($_SESSION != NULL){ 
        $user_name = $_SESSION['user_name'];

        echo $twig->render('accueil.html.twig', [
            'user' => $user_name,
            'session' => $_SESSION
        ]);
    }else{
        echo $twig->render('accueil.html.twig');
    }
}

function deleteSession(){
    session_destroy();
    header('Location: /home');
}

function register($twig){

    echo $twig->render('inscription.html.twig');

}

function createUSer($twig,$pdo){


    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $mail = $_POST['mail'];

    $User_data = $pdo->query("SELECT login 
    FROM users 
    WHERE login = '$login'")->fetch();

    if($User_data == NULL){

        if(strlen($mdp)<8){
            echo $twig->render('inscription.html.twig', [
                'errorMdp' => "Veuillez saisir un mot de passe de 8 caractères minimum", 'mdp' => $mdp, 'login' => $login]);
        }else{

        $Request = $pdo->query("INSERT INTO users VALUES ('','$login','$mdp','$mail')");

        $_SESSION['user_name'] = $login;
                
                //header('Location: ../'); 
                echo $twig->render('welcome.html.twig', [
                    'user' => $login,
                    'session' => $_SESSION
                ]);
        }

    }else{
        echo $twig->render('inscription.html.twig', [
        'error' => "Ce Pseudo est déjà pris, désolé",'dataUser' => $User_data, 'login' => $login]);
    }

}

?>