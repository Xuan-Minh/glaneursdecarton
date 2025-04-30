<!DOCTYPE html>
<html>
<head>
    <title>Votre Titre</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>
<body>

<div id="preloader">
    <div id="preloader-background"></div>
    <div id="preloader-content">
        <h1>‘glaneur,-euse’, personne qui glane, c'est-à-dire qui ramasse des choses.
            Personne qui traîne à la fin des marchés pour récupérer les produits qui ont été jetés aux ordures.</h1>
        <p>En Corée du Sud, plus de 3 millions de retraités vivent en dessous du seuil de pauvreté, soit 52% d’entre eux, ou 5,79% de la population globale. Marginalisés, ignorés, tabouisés : les séniors n’ont d’autre choix que de travailler pour faire face, quitte à effectuer des besognes éprouvantes et indignement rémunérées. C’est le cas des glaneurs de cartons, qui s’évertuent à récolter les déchets en Corée afin de les revendre pour combler des revenus quasi-inexistants.


            Les éléments en orange vous indiquent les éléments avec lesquels vous pouvez interagir.</p>
        <button id="enter-button">ENTER</button>
        <div id="progress-bar">
            <div id="progress-bar-fill"></div>
        </div>
    </div>
</div>

<div id="main-content" style="display: none;">
    <div class="container">

        <div class="slides">
            <h1>Les glaneurs de carton</h1>
            <video autoplay muted loop>
                <source src="video/soleil.mp4" type="video/mp4" />
            </video>
        </div>

        <div class="slides slide1">
            <div id="visionner">
                <button id="close-visionner">X</button>
                <video controls>
                    <source src="video/soleil.mp4" type="video/mp4" />
                </video></div>
            <h2>Chapitre 1</h2>
            <div class="sliderButton">
                <div class="point1 full"></div>
                <div class="point2 empty"></div>
            </div>

            <div id="info">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <video autoplay muted loop>
                <source src="video/pluie.mp4" type="video/mp4" />
            </video>
        </div>

        <div class="slides">
            <video autoplay muted loop>
                <source src="video/pont.mp4" type="video/mp4" />
            </video>
        </div>

    </div>
</div>

<script src="js/script.js"></script>
<script src="js/jquery-3.1.0.min.js "></script>
</body>
</html>