<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font ROBOTO CONDENSED -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <!----------------------------------- -->
    <link rel="stylesheet" href="./assets/css/adminDashboard.css" />
    <link rel="stylesheet" href="./assets/css/cardResumeTournament.css" />
    <link rel="stylesheet" href="./assets/css/navbar.css" />
    <title>Tableau de bord Administrateur</title>
  </head>
  <body>
    <header>  
      <?php render('navbar', true); ?>     <!-- AJout de la navbar -->
    </header>
    <main>
      <h1>TABLEAU DE BORD ADMINISTRATEUR :</h1>
      <!-- SECTION TOURNOIS -->
      <div class="box">
        <div class="title-box dropdown-tournament-admin">
          <h2>Les tournois</h2>
          <img
            src="./assets/img/General/arrow-down-sign-to-navigate.png"
            alt="fleche pour ouvrir et fermer la fenetre des parametre"
          />
        </div>
        <div class="container-resume">
          <div class="number-resume">
            <p>Total :</p>
            <span class="blue" id="tournament-waiting">5</span>
          </div>
          <div class="number-resume">
            <p>En cours :</p>
            <span class="green" id="tournament-accept">3</span>
          </div>
          <div class="number-resume">
            <p>A venir :</p>
            <span class="orange" id="tournament-canceled">2</span>
          </div>
          <div class="number-resume">
            <p>Terminée :</p>
            <span class="red" id="tournament-refused">0</span>
          </div>
        </div>
        <div class="container-search">
          <div class="search-bar">
            <div class="input-search-container">
              <h3>Rechercher un tournoi :</h3>
              <input
                type="text"
                id="tournament-search"
                placeholder="Rechercher un tournoi..."
              />
              <label for="tournament-search"
                ><img
                  src="./assets/img/General/searchIcon.png"
                  alt="Icone de recherche"
              /></label>
            </div>
          </div>
        </div>
        <!-- container des resultats de la recherche de tournois -->
        <div class="container-result-search">
          <!-- carte tournois -->
          <div class="card-tournament">
            <a href="./tournamentManagement.html" target="_blank">
              <div class="banner-card-tournament"></div>
              <h4>
                T1 tournament | 16 teams | direct elimination | Cashprize 2500RP
              </h4>
              <div class="info-date-tournament">
                <img
                  src="./assets/img/General/schedule.png"
                  alt="Icone calendrier"
                />
                <p>Tue dec 24</p>
                <img
                  src="./assets/img/General/clock.png"
                  alt="Icone horloge"
                />
                <p>19:00 AM CET</p>
                <p>in 3 days</p>
              </div>
              <div class="divider-card"></div>
              <h5>Région</h5>
              <div class="divider-card"></div>
              <h6>Nom de l'organisateur</h6>
            </a>
          </div>
          <!-- fin carte tournoi -->
          <!-- carte tournois -->
          <div class="card-tournament">
            <a href="./tournamentManagement.html" target="_blank">
              <div class="banner-card-tournament"></div>
              <h4>
                T1 tournament | 16 teams | direct elimination | Cashprize 2500RP
              </h4>
              <div class="info-date-tournament">
                <img
                  src="./assets/img/General/schedule.png"
                  alt="Icone calendrier"
                />
                <p>Tue dec 24</p>
                <img
                  src="./assets/img/General/clock.png"
                  alt="Icone horloge"
                />
                <p>19:00 AM CET</p>
                <p>in 3 days</p>
              </div>
              <div class="divider-card"></div>
              <h5>Région</h5>
              <div class="divider-card"></div>
              <h6>Nom de l'organisateur</h6>
            </a>
          </div>
          <!-- fin carte tournoi -->
          <!-- carte tournois -->
          <div class="card-tournament">
            <a href="./tournamentManagement.html" target="_blank">
              <div class="banner-card-tournament"></div>
              <h4>
                T1 tournament | 16 teams | direct elimination | Cashprize 2500RP
              </h4>
              <div class="info-date-tournament">
                <img
                  src="./assets/img/General/schedule.png"
                  alt="Icone calendrier"
                />
                <p>Tue dec 24</p>
                <img
                  src="./assets/img/General/clock.png"
                  alt="Icone horloge"
                />
                <p>19:00 AM CET</p>
                <p>in 3 days</p>
              </div>
              <div class="divider-card"></div>
              <h5>Région</h5>
              <div class="divider-card"></div>
              <h6>Nom de l'organisateur</h6>
            </a>
          </div>
          <!-- fin carte tournoi -->
        </div>
      </div>

      <!-- SECTION UTILISATEUR  -->
      <div class="box">
        <div class="title-box dropdown-tournament-admin">
          <h2>Utilisateurs</h2>
          <img
            src="./assets/img/General/arrow-down-sign-to-navigate.png"
            alt="fleche pour ouvrir et fermer la fenetre des parametre"
          />
        </div>
        <div class="container-resume">
          <div class="number-resume">
            <p>Total :</p>
            <span class="blue" id="tournament-waiting">5</span>
          </div>
          <div class="number-resume">
            <p>Connectés :</p>
            <span class="green" id="tournament-accept">3</span>
          </div>
          <div class="number-resume">
            <p>Inscrit/mois :</p>
            <span id="tournament-canceled">2</span>
          </div>
          <div class="number-resume">
            <p>Inscrit/tournois :</p>
            <span id="tournament-refused">0</span>
          </div>
        </div>
        <div class="container-search">
          <div class="search-bar">
            <div class="input-search-container">
              <h3>Rechercher un utilisateur :</h3>
              <input
                type="text"
                id="users-search"
                placeholder="Rechercher un utilisateur..."
              />
              <label for="users-search">
                <img
                  src="./assets/img/General/searchIcon.png"
                  alt="Icone de recherche"
              /></label>
            </div>
          </div>
        </div>

        <!-- container des résultats de la recherche utilisateur -->
        <div class="container-result-search">
          <div class="table-title">
            <h4>Nom</h4>
            <h4>Email</h4>
            <h4>Pseudo</h4>
          </div>
          <ul class="list-users">
            <li class="list-item">
              <a class="user-lign" href="./profilPrivate.html" target="_blank">
                <p class="name">
                  <img
                    src="./assets/img/General/PhotoProfil.jpg"
                    alt="Photo de profil"
                  />Jean dupont
                </p>
                <p class="user-email">JeanDupont@hotmail.fr</p>
                <p class="user-nickname">
                  JeannoLapin<span class="green">"Online"</span
                  ><img
                    src="./assets/img/General/crayon.png"
                    alt="Modifier utilisateur"
                  />
                </p>
              </a>
            </li>
            <li class="list-item">
              <a class="user-lign" href="./profilPrivate.html" target="_blank"
                ><p class="name">
                  <img
                    src="./assets/img/General/PhotoProfil.jpg"
                    alt="Photo de profil"
                  />
                  Jean dupont
                </p>
                <p class="user-email">JeanDupont@hotmail.fr</p>
                <p class="user-nickname">
                  JeannoLapin<span class="red">"Offline"</span
                  ><img
                    src="./assets/img/General/crayon.png"
                    alt="Modifier utilisateur"
                  />
                </p>
              </a>
            </li>
            <li class="list-item">
              <a class="user-lign" href="./profilPrivate.html" target="_blank">
                <p class="name">
                  <img
                    src="./assets/img/General/PhotoProfil.jpg"
                    alt="Photo de profil"
                  />Jean dupont
                </p>
                <p class="user-email">JeanDupont@hotmail.fr</p>
                <p class="user-nickname">
                  JeannoLapin <span class="red">"Offline"</span
                  ><img
                    src="./assets/img/General/crayon.png"
                    alt="Modifier utilisateur"
                  />
                </p>
              </a>
            </li>
            <li class="list-item">
              <a class="user-lign" href="./profilPrivate.html" target="_blank">
                <p class="name">
                  <img
                    src="./assets/img/General/PhotoProfil.jpg"
                    alt="Photo de profil"
                  />Jean dupont
                </p>
                <p class="user-email">JeanDupont@hotmail.fr</p>
                <p class="user-nickname">
                  JeannoLapin <span class="green">"Online"</span
                  ><img
                    src="./assets/img/General/crayon.png"
                    alt="Modifier utilisateur"
                  />
                </p>
              </a>
            </li>
            <li class="list-item">
              <a class="user-lign" href="./profilPrivate.html" target="_blank">
                <p class="name">
                  <img
                    src="./assets/img/General/PhotoProfil.jpg"
                    alt="Photo de profil"
                  />Jean dupont
                </p>
                <p class="user-email">JeanDupont@hotmail.fr</p>
                <p class="user-nickname">
                  JeannoLapin <span class="green">"Online"</span
                  ><img
                    src="./assets/img/General/crayon.png"
                    alt="Modifier utilisateur"
                  />
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </main>
    <script src="./assets/javascript/animationNavbar.js"></script>
    <script src="./assets/javascript/dashboardAdmin.js"></script>
  </body>
</html>
