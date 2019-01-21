//je déclare mes span pour les msg d'erreurs
var errorTitre = document.getElementById('errorTitre');
var errorAnnee = document.getElementById('errorAnnee');
var errorGenre = document.getElementById('errorGenre');
var errorReal = document.getElementById('errorReal');
var errorTexte = document.getElementById('errorTexte');


// je déclare ma fonction au submit
const formValid = document.getElementById('btn')
formValid.addEventListener('click', function (e) {

    e.preventDefault();

    const titre = document.getElementById('titre').value;
    const titreShadow = document.getElementById('titre');

    const annee = document.getElementById('annee').value;
    const anneeShadow = document.getElementById('annee');

    const genre = document.getElementById('genre').value;
    const genreShadow = document.getElementById('genre');

    const real = document.getElementById('real').value;
    const realShadow = document.getElementById('real');

    const acteurs = document.getElementById('acteurs').value;
    const acteursShadow = document.getElementById('acteurs');

    const texte = document.getElementById('texte').value;
    const texteShadow = document.getElementById('texte');

    $.ajax({
        type: "POST",
        url: "traitement.php",
        dataType: "json",
        data: {
            titre: titre,
            annee: annee,
            genre: genre,
            real: real,
            acteurs: acteurs,
            texte: texte
        },
        success: function (response) {
            if (response.code == "200") {
                alert("Success: " + response.msg);
            } else {
                if (response.errorTitre) {
                    errorTitre.textContent = response.errorTitre;
                    titreShadow.className = "error";
                } else {
                    titreShadow.className = "ok";
                    errorTitre.textContent = "";
                }
                if (response.errorAnnee) {
                    errorAnnee.textContent = response.errorAnnee;
                    anneeShadow.className = "error";
                } else {
                    errorAnnee.textContent = "";
                    anneeShadow.className = "ok";
                }
                if (response.errorGenre) {
                    errorGenre.textContent = response.errorGenre;
                    genreShadow.className = "error";
                } else {
                    genreShadow.className = "ok";
                    errorGenre.textContent = "";
                }
                if (response.errorReal) {
                    errorReal.textContent = response.errorReal;
                    realShadow.className = "error";
                } else {
                    realShadow.className = "ok";
                    errorReal.textContent = "";
                }
                if (response.errorActeurs) {
                    errorActeurs.textContent = response.errorActeurs;
                    acteursShadow.className = "error";
                } else {
                    acteursShadow.className = "ok";
                    errorActeurs.textContent = "";
                }
                if (response.errorTexte) {
                    errorTexte.textContent = response.errorTexte;
                    texteShadow.className = "error";
                } else {
                    texteShadow.className = "ok";
                    errorTexte.textContent = "";
                }
            }
        },
        error: function (e) {
        }
    });
});
