<?php


    function verifUser(){

        try{
            $pdo = new PDO('mysql:host=localhost;dbname=yakwa;charset=utf8', 'root', '');
            }
            catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
                
            require_once 'vendor/autoload.php';
            $loader = new Twig_Loader_Filesystem('views');
            $twig = new Twig_Environment($loader);
            
            $saisie_login = $_POST['nom'];
            $saisie_mdp = $_POST['password'];
                
                $Request = $pdo->query("SELECT * 
                FROM users 
                WHERE login = '$saisie_login' 
                AND mot_de_passe = '$saisie_mdp' ");

                $nb_row = $Request->rowCount();

                if($nb_row == 1){
                
                    echo $twig->render('accueil.html.twig', [
                        'user' => $Request
                    ]);
                }
    
    }

?>