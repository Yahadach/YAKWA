<?php

$errorTitre="";
$errorAnnee="";
$errorGenre="";
$errorReal="";
$errorActeurs="";
$errorTexte="";

//$errorMsg ="";

/* TITRE */
if (empty($_POST["titre"])) {
    $errorTitre= 'Syntaxe incorrecte'; 
} else {
   // $errorMsg = '<li>Nom incorrect</li>';
    $titre = $_POST["titre"];
}

/* ANNEE */
if (preg_match("#(?:(?:19|20)[0-9]{2})#", $_POST["annee"])){
    $annee = $_POST["annee"];
} else {
    $errorAnnee = 'Entrée incorrecte';
}
 

/* GENRE */
if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#", $_POST["genre"])) {
    $genre = $_POST["genre"];
} else {
    $errorGenre = 'Syntaxe incorrecte'; 
}

/* REALISATEUR */
if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#", $_POST["real"])) {
    $real = $_POST["real"];
} else {
    $errorReal = 'Syntaxe incorrecte'; 
}

/* ACTEURS */
if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#", $_POST["acteurs"])) {
    $acteurs = $_POST["acteurs"];
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
if((empty($errorTitre)) && (empty($errorAnnee)) && (empty($errorGenre)) && (empty($errorReal)) && (empty($errorActeurs)) && (empty($errorTexte))){
	$msg = "Titre: ".$titre.", Annee: ".$annee.", Genre: ".$genre.", Real: ".$real.", Acteurs: ".$acteurs.", Texte:".$texte;
	echo json_encode(['code'=>200, 'msg'=>$msg]);
} else {
    //echo json_encode(['code'=>404, 'msg'=>$errorMsg]);
    echo json_encode(['code'=>404, 'errorTitre'=>$errorTitre, 'errorAnnee'=> $errorAnnee,'errorGenre' => $errorGenre, 'errorReal'=>$errorReal, 'errorActeurs'=>$errorActeurs, 'errorTexte'=>$errorTexte]);
}

?>
