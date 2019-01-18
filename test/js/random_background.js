headerImage = document.getElementById('header_background');


function genBackground() {

    var stockNb = Math.floor(Math.random() * Math.floor(6));
    console.log(stockNb);
    headerImage.style.backgroundImage = "url('img/photos/" + stockNb + ".jpg')";
    headerImage.style.backgroundSize = "cover";
}

genBackground();
