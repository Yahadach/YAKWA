headerImage = document.getElementById('header_background');


function genBackground() {

    var stockNb = Math.floor(Math.random() * Math.floor(30));
    console.log(stockNb);
    headerImage.style.backgroundImage = "url('public/img/photos/" + (stockNb + 1) + ".jpg')";
    headerImage.style.backgroundSize = "cover";
}

genBackground();