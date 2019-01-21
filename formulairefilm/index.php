<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>AJOUTEZ VOTRE FILM</title>
</head>
<!-- CE QUI NOUS INTERESSE COMMENCE ICI dans le body -->

<body>
    <section id="contact">

        <h1>Ajoutez un film</h1>

        <form id='form' method="post" action="traitement.php">

            <input name="titre" id="titre" class="input" placeholder="Le titre*" minlenght="2" maxlength="100"
                required><br><span id='errorTitre'></span><br>
            <input type="text" name="annee" id="annee" class="input" placeholder="L'année de sortie*" minlenght="4"
                maxlength="4" required><br><span id='errorAnnee'></span><br>
            <input type="text" name="genre" id="genre" class="input" placeholder="Le genre*"><br><span id='errorGenre'></span><br>
            <input type="text" name="real" id="real" class="input" placeholder="Réalisateur(s)*" minlength="3"
                maxlength="100" required><br><span id='errorReal'></span><br>
            <input type="text" name="acteurs" id="acteurs" class="input" placeholder="Acteur(s)*" minlength="3"
                maxlength="100" required><br><span id='errorActeurs'></span><br>
            <textarea name="textarea" id="texte" class="input" placeholder="Synopsis*" minlength="10" maxlength="100"
                required></textarea><br><span id='errorTexte'></span><br>
            <input type="submit" id="btn" value="Envoyer">
        </form>
        <span class="errorMsg"></span>

    </section>

    <script src="jquery.js"></script>
    <script src="js.js"></script>

</body>

</html>