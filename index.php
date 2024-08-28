<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <title>Réservation DolibarrDay Lille</title>
</head>

<body>
    <div class="header">
        <div class="title">
            <span id="doli">Doli</span>
            <span id="day">Day</span>
        </div>
        <nav class="header-nav">
            <a href="#">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
        <div class="burger-menu" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav class="header-nav-mobile">
            <a href="#">Accueil</a>
            <a href="#">À propos</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
    </div>

    <div class="main-banner">
        <h2>Réservez votre place pour le DolibarrDay à Lille</h2>
        <button id="scrollToRegister">S'inscrire maintenant</button>
    </div>

    <div class="container" id="about">
        <h2>A propos</h2>
        <p>Elonet et NORD ERP CRM ont le plaisir de vous accueillir pour le <b>Dolibarr Day</b> prévu le <b>7
                novembre 2024.</b></p>
        <p>Un événement organisé afin d'échanger entre utilisateurs de Dolibarr et de rassembler la communauté autour du
            projet Dolibarr.</p>
    </div>

    <div class="container" id="schedule">
        <h2>Programme</h2>
        <ul>
            <li>Accueil autour d'un café et viennoiseries</li>
            <li>Présentation de cas pratiques</li>
            <li>Témoignages clients</li>
            <li>Présentation des nouvelles fonctionnalités</li>
            <li>Introduction au module de trésorerie</li>
            <li>Échanges et discussions avec les contributeurs et utilisateurs de Dolibarr</li>
            <li>Networking</li>
        </ul>
    </div>

    <div class="container" id="location">
        <h2>Lieu et horaires</h2>
        <La>Cette journée se déroulera à La Ferme de Saint Chrysole</p>
            <p>1015 rue de Quesnoy, 59118 Wambrechies</p>
            <p>Le Jeudi 7 novembre 2024. De 09h00 à 14h00</p>
    </div>


    <div class="container" id="register">
        <h2>Formulaire d'inscription</h2>
        <div class="form-container">
            <form id="registrationForm" method="POST">
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>

                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="website">Site web</label>
                    <input type="url" id="website" name="website">
                </div>

                <div class="form-group">
                    <button type="submit">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>


    <div class="container" id="gallery">
        <h2>Galerie photos</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <a href="assets/img/ferme1.webp" data-lightbox="gallery">
                    <img src="assets/img/ferme1.webp" alt="Description de la photo 1">
                </a>
            </div>
            <div class="gallery-item">
                <a href="assets/img/ferme2.jpg" data-lightbox="gallery"">
                    <img src=" assets/img/ferme2.jpg" alt="Description de la photo 2">
                </a>
            </div>
            <div class="gallery-item">
                <a href="assets/img/ferme3.jpg" data-lightbox="gallery">
                    <img src="assets/img/ferme3.jpg" alt="Description de la photo 3">
                </a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Elonet et NORD ERP CRM. Tous droits réservés.</p>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script src="assets/js/scroll.js"></script>
<script src="assets/js/send_form.js"></script>
<script src="assets/js/popup.js"></script>
<script src="assets/js/burger.js"></script>

</html>