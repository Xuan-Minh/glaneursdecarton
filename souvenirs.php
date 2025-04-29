<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Souvenirs Évanescents</title>
    <link rel="stylesheet" href="css\souvenirs.css">
   
</head>
<body>
<h1>Echos</h1>

<div class="souvenir" data-audio-start="0" data-audio-end="3">
    <p class="souvenir-texte">Le soleil caressait mon visage ce matin-là, une douce chaleur oubliée depuis longtemps.</p>
</div>

<div class="souvenir" data-audio-start="5" data-audio-end="8">
    <p class="souvenir-texte">Un enfant m'a souri en passant, un sourire pur, sans jugement.</p>
</div>

<div class="souvenir" data-audio-start="10" data-audio-end="15">
    <p class="souvenir-texte">Le bruit du vent dans les feuilles, une mélodie simple qui apaise mon cœur.</p>
</div>

<div class="souvenir" data-audio-start="17" data-audio-end="22">
    <p class="souvenir-texte">Quelqu'un m'a offert un café chaud, un geste si petit, mais si grand.</p>
</div>

<div id="audio-ambiance">Ambiance sonore (survoler les souvenirs pour entendre)</div>

<audio id="voix-melangees" loop>
    <source src="voix_melangees.mp3" type="audio/mpeg">
    Votre navigateur ne supporte pas l'élément audio.
</audio>

<script>
    const souvenirs = document.querySelectorAll('.souvenir');
    const audioAmbiance = document.getElementById('voix-melangees');
    let isPlaying = false;

    function getRandomNumber(min, max) {
        return Math.random() * (max - min) + min;
    }

    souvenirs.forEach((souvenir, index) => {
        // Position de départ aléatoire
        let top = getRandomNumber(0, window.innerHeight - souvenir.offsetHeight);
        let left = getRandomNumber(0, window.innerWidth - souvenir.offsetWidth);
        let speedX = getRandomNumber(-1, 1);
        let speedY = getRandomNumber(-1, 1);

        souvenir.style.top = `${top}px`;
        souvenir.style.left = `${left}px`;

        function animate() {
            top += speedY;
            left += speedX;

            // Rebondir sur les bords
            if (top < 0) {
                top = 0;
                speedY = -speedY;
            } else if (top > window.innerHeight - souvenir.offsetHeight) {
                top = window.innerHeight - souvenir.offsetHeight;
                speedY = -speedY;
            }

            if (left < 0) {
                left = 0;
                speedX = -speedX;
            } else if (left > window.innerWidth - souvenir.offsetWidth) {
                left = window.innerWidth - souvenir.offsetWidth;
                speedX = -speedX;
            }

            souvenir.style.top = `${top}px`;
            souvenir.style.left = `${left}px`;

            requestAnimationFrame(animate);
        }

        animate();

        souvenir.addEventListener('mouseenter', () => {
            const start = parseFloat(souvenir.dataset.audioStart);
            const end = parseFloat(souvenir.dataset.audioEnd);

            if (audioAmbiance.currentTime < start || audioAmbiance.currentTime > end) {
                audioAmbiance.currentTime = start;
            }
            audioAmbiance.volume = 0.5; // Augmente le volume au survol
            if (!isPlaying) {
                audioAmbiance.play();
                isPlaying = true;
            }
        });

        souvenir.addEventListener('mouseleave', () => {
            audioAmbiance.volume = 0.1; // Baisse le volume quand le curseur quitte
        });
    });

    // Assure que l'ambiance sonore démarre en sourdine
    audioAmbiance.volume = 0.1;
    audioAmbiance.play().catch(error => {
        console.warn("Lecture automatique de l'audio bloquée par le navigateur.", error);
        // Vous pourriez ajouter un bouton pour démarrer l'audio si la lecture automatique est bloquée
    });
</script>
</body>
</html>