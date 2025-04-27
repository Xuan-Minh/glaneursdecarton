document.addEventListener('DOMContentLoaded', () => {
    const preloader = document.getElementById('preloader');
    const progressBar = document.getElementById('progress-bar');
    const progressBarFill = document.getElementById('progress-bar-fill');
    const enterButton = document.getElementById('enter-button');
    const mainContent = document.getElementById('main-content');

    let loaded = false;

    enterButton.classList.add('disabled');

    // Animation de la barre de progression avec GSAP
    gsap.to(progressBarFill, {
        duration: 1,
        width: '100%',
        ease: 'linear',
        onComplete: () => {
            loaded = true;
            gsap.to(progressBar, { duration: 0.5, opacity: 0 }); // Fondu de la barre
            gsap.fromTo( // Animation du bouton "ENTER"
                enterButton,
                { scale: 0.8, opacity: 0 },
                {
                    duration: 0.5,
                    scale: 1,
                    opacity: 1,
                    ease: 'power1.out',
                    onComplete: () => enterButton.classList.remove('disabled'),
                }
            );
        },
    });

    // Transition vers le contenu principal avec GSAP
    enterButton.addEventListener('click', () => {
        if (loaded) {
            gsap.to(preloader, {
                duration: 0.5,
                opacity: 0,
                onComplete: () => {
                    preloader.style.display = 'none';
                    mainContent.style.display = 'block';
                },
            });
        }
    });
});

$(".slide1 h2").click(function() {
    $("#visionner").fadeIn(400).css("display", "flex");
    $("body").css("overflow", "hidden");
    $("#info").fadeOut(0);
    //$(".slide1 video").removeClass("flou");
    // $(".slide1 h2").removeClass("move");
});

$(".slide1 .sliderButton .point2").click(function() {
    $("body").css("overflow", "auto");
    $("#info").fadeIn(2000);
    $(".slide1 h2").addClass("move");
    $(".slide1 video").addClass("flou");
    $(".slide1 .sliderButton .point2").addClass("full");
    $(".slide1 .sliderButton .point2").removeClass("empty");
    $(".slide1 .sliderButton .point1").addClass("empty");
    $(".slide1 .sliderButton .point1").removeClass("full");
});

$(".slide1 .sliderButton .point1").click(function() {
    $("body").css("overflow", "auto");
    $("#info").fadeOut(500);
    $(".slide1 h2").removeClass("move");
    $(".slide1 video").removeClass("flou");
    $(".slide1 .sliderButton .point1").addClass("full");
    $(".slide1 .sliderButton .point1").removeClass("empty");
    $(".slide1 .sliderButton .point2").addClass("empty");
    $(".slide1 .sliderButton .point2").removeClass("full");
});

// $(".slide1 h2").one("click", function() {
// 	$(".slide1 h2").css("opacity","0%");
// });

$("#close-visionner").click(function(event) {
    event.stopPropagation();
    $("#visionner").fadeOut(400);
    $("body").css("overflow", "auto");
    $("#info").fadeIn(2000);
    $(".slide1 h2").addClass("move");
    $(".slide1 video").addClass("flou");
    $(".slide1 .sliderButton .point2").addClass("full");
    $(".slide1 .sliderButton .point2").removeClass("empty");
    $(".slide1 .sliderButton .point1").addClass("empty");
    $(".slide1 .sliderButton .point1").removeClass("full");
});