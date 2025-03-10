// Slider dla nagłówka
var bgIndex = 0;
var backgroundImages = [
    './assets/img/clock1.jpg', 
    './assets/img/clock2.jpg', 
    './assets/img/clock3.jpg', 
    './assets/img/clock4.jpg' 
];
var intervalId;

function changeBackground(index) {
    bgIndex = index;
    $('.masthead').css('background-image', "url('" + backgroundImages[bgIndex] + "')");

    $('.dot').each(function(i, dot) {
        $(dot).removeClass('active');
        if (i === index) {
            $(dot).addClass('active');
        }
    });
    stopSlider();
    startSlider();
}

function startSlider() {
    intervalId = setInterval(function() {
        bgIndex = (bgIndex + 1) % backgroundImages.length;
        changeBackground(bgIndex);
    }, 10000);
}

function stopSlider() {
    clearInterval(intervalId);
}

startSlider();
