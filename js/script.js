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