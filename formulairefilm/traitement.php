<?php

$errorTitre="";
$titrePresent="";
$errorAnnee="";
$errorGenre="";
$errorReal="";
$errorActeurs="";
$errorTexte="";
$titre = $_POST["titre"];


$pdo = new PDO('mysql:host=localhost;dbname=yakwa', "root", "");

//$errorMsg ="";

/* TITRE */
if (empty($titre)) {
$errorTitre= 'Syntaxe incorrecte'; 
} else {
$count = $pdo->prepare("SELECT * FROM `yakwa`.`films` WHERE titre LIKE '".$titre."' LIMIT 1");
$count->execute();
$result = $count->fetch();
if($result==0) {
//N'existe pas
$titre = $_POST["titre"];
} else {
//Existe déjà
$titrePresent="Le titre est déjà présent dans la base de données";
}
}

/* ANNEE */
if (preg_match("#(?:(?:19|20)[0-9]{2})#", $_POST["annee"])){
$annee = $_POST["annee"];
} else {
$errorAnnee = 'Entrée incorrecte';
}


/* GENRE */
if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#", $_POST["genre"])) {

    // MAIS d'abord vérifier s'il est dans la base de données
        $genre = $_POST["genre"];
        $count = $pdo->prepare("SELECT * FROM `yakwa`.`genre` WHERE nom LIKE '".$genre."' LIMIT 1");
        $count->execute();
        $result = $count->fetch();
    
            if($result==0) {
            //N'existe pas
            $titre = $_POST["genre"];
    
            } else {
            // //Existe déjà DONC relier id acteur / nouveau film
            }
            
    } else {
    $errorGenre = 'Syntaxe incorrecte'; 
    }
    
    
    /* SYNOPSIS */
    if (empty($_POST["texte"])) {
    $errorTexte = "Texte non valide";
    } else {
    $texte = $_POST["texte"];
    }


/* REALISATEUR */
if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#", $_POST["real"])) {

    // MAIS d'abord vérifier s'il est dans la base de données
        $real = $_POST["real"];
        $count = $pdo->prepare("SELECT * FROM `yakwa`.`realisateurs` WHERE nom LIKE '".$real."' LIMIT 1");
        $count->execute();
        $result = $count->fetch();
    
            if($result==0) {
            //N'existe pas
            $titre = $_POST["real"];
    
            } else {
            // //Existe déjà DONC relier id realisateur / nouveau film
            }
            
    } else {
    $errorReal = 'Syntaxe incorrecte'; 
    }



/* ACTEURS */

// Séparer en plusieurs valeurs à l'aide des virgules
if((isset($_POST['acteurs']))
{
    // insertion dans la base de données
    $acteurs=trim(htmlentities($_POST['acteurs']));
    $acteurs = explode(", ", $acteurs); //text[0] est ton nom d'auteur et text[1] le prénom.
    $add = sprintf('INSERT INTO acteurs (nom,nom,nom) VALUES ('.ucfirst($acteur[0]).', '.ucfirst($acteur[1]).', '.ucfirst($acteur[2]).')');
    $result = mysql_query($add, $connexion) or die(mysql_error());
}



// Vérifier syntaxte séparément PUIS vérifier présence dans la base de données
// Acteur 1
if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#", $_POST["acteurs"])) {
    $acteurs = $_POST["acteurs"];
    $count = $pdo->prepare("SELECT * FROM `yakwa`.`acteurs` WHERE nom LIKE '".$acteur[0]."' LIMIT 1");
    $count->execute();
    $result = $count->fetch();

        if($result==0) {
        //N'existe pas
        $acteur[0] = $_POST["acteurs"];

        } else {
        // //Existe déjà DONC relier id acteur / nouveau film
        }
        
} else {
$errorActeurs = 'Syntaxe incorrecte'; 
}

// Acteur 2
if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#", $_POST["acteurs"])) {
    $acteurs = $_POST["acteurs"];
    $count = $pdo->prepare("SELECT * FROM `yakwa`.`acteurs` WHERE nom LIKE '".$acteur[1]."' LIMIT 1");
    $count->execute();
    $result = $count->fetch();

        if($result==0) {
        //N'existe pas
        $acteur[1] = $_POST["acteurs"];

        } else {
        // //Existe déjà DONC relier id acteur / nouveau film
        }
        
} else {
$errorActeurs = 'Syntaxe incorrecte'; 
}


// Acteur 3
if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#", $_POST["acteurs"])) {
    $acteurs = $_POST["acteurs"];
    $count = $pdo->prepare("SELECT * FROM `yakwa`.`acteurs` WHERE nom LIKE '".$acteur[2]."' LIMIT 1");
    $count->execute();
    $result = $count->fetch();

        if($result==0) {
        //N'existe pas
        $acteur[2] = $_POST["acteurs"];

        } else {
        // //Existe déjà DONC relier id acteur / nouveau film
        }
        
} else {
$errorActeurs = 'Syntaxe incorrecte'; 
}





/* SYNOPSIS */
if (empty($_POST["texte"])) {
$errorTexte = "Texte non valide";
} else {
$texte = $_POST["texte"];
}

/* ERROR */
if((empty($errorTitre)) && (empty($titrePresent)) && (empty($errorAnnee)) && (empty($errorGenre)) && (empty($errorReal)) && (empty($errorActeurs)) && (empty($errorTexte))){
$msg = "Titre: ".$titre.", Annee: ".$annee.", Genre: ".$genre.", Real: ".$real.", Acteurs: ".$acteurs.", Texte:".$texte;
echo json_encode(['code'=>200, 'msg'=>$msg]);
/*Traitement des données en bdd*/
$requete = $pdo->prepare('INSERT INTO films (titre, annee, synopsis) VALUES(:titre, :annee, :synopsis)');
$requete->bindValue(':titre', $titre, PDO::PARAM_STR);
$requete->bindValue(':annee', $annee, PDO::PARAM_INT);
$requete->bindValue(':synopsis', $texte, PDO::PARAM_STR);
$requete->execute();

$requete = $pdo->prepare('INSERT INTO acteurs(nom) VALUES(:acteurs)');
$requete->bindValue(':acteurs', $acteurs, PDO::PARAM_STR);
$requete->execute();

$requete = $pdo->prepare('INSERT INTO realisateurs(nom) VALUES(:real)');
$requete->bindValue(':real', $real, PDO::PARAM_STR);
$requete->execute();

$requete = $pdo->prepare('INSERT INTO genre(nom) VALUES(:genre)');
$requete->bindValue(':genre', $genre, PDO::PARAM_STR);
$requete->execute();

} else {
//echo json_encode(['code'=>404, 'msg'=>$errorMsg]);
echo json_encode(['code'=>404, 'errorTitre'=>$errorTitre, 'titrePresent'=>$titrePresent, 'errorAnnee'=> $errorAnnee,'errorGenre' => $errorGenre, 'errorReal'=>$errorReal, 'errorActeurs'=>$errorActeurs, 'errorTexte'=>$errorTexte]);

}

?>