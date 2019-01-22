headerImage = document.getElementById('header_background');


function genBackground() {

    var stockNb = Math.floor(Math.random() * Math.floor(25));
    console.log(stockNb);
    headerImage.style.backgroundImage = "url('public/img/photos/" + stockNb + ".jpg')";
    headerImage.style.backgroundSize = "cover";
}

genBackground();