<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>*Titre du tournoi généré par le backend*</title>
    <!-- font ROBOTO CONDENSED -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <!----------------------------------- -->
    <link rel="stylesheet" href="./assets/css/navbar.css" />
    <link rel="stylesheet" href="./assets/css/tournamentSheet.css" />
    <link rel="stylesheet" href="./assets/css/tournamentTree.css" />
  </head>
  <body>
    <header>
      <?php render('navbar', true); ?> <!-- AJout de la navbar -->

      <!-- LISTE LATERAL DES PARTICIPANT VISIBLE UNIQUEMENT EN VERSION tablette/desktop -->

      <div class="container-list-sub-desktop">
        <div class="list-sub">
          <h2>Participant :</h2>
          <ul>
            <li><a href="">Joueur 1</a></li>
            <li><a href="">Joueur 2</a></li>
            <li><a href="">Joueur 3</a></li>
            <li><a href="">Joueur 4</a></li>
            <li><a href="">Joueur 5</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main>
      <!-- DEBUT DE LA SECTION INFORMATION GENERALE -->
      <h1>Feuille du tournoi : <br /><em>*Nom du tournoi*</em></h1>
      <div class="main-container-tournament-sheet">
        <div class="info-general-tournament-sheet">
          <div class="title-sheet-tournament dropdown-info-sheet-tournament">
            <h2>Information générale</h2>
            <img
              src="./assets/img/General/arrow-down-sign-to-navigate.png"
              alt="fleche pour ouvrir et fermer la fenetre des parametre"
              class="dropdown"
            />
          </div>
          <div class="container-info-description">
            <div class="card-tournament-sheet">
              <img
                src="./assets/img/General/MiniBannière-lol323x100.webp"
                alt="Banniere du tournoi"
              />
              <div class="info-card">
                <h4 class="titre">
                  T1 tournament | 16team | Elimination direct | Cashprize 2500RP
                </h4>
                <div class="container-divider-card">
                  <div class="container-left">
                    <h3>Jeux :</h3>
                    <p>League of legend</p>
                    <h3>Région :</h3>
                    <p>Eu West</p>
                    <h3>Date :</h3>
                    <p>20 / 12 / 2024</p>
                    <h3>Discord :</h3>
                    <p>https://discord.gg/QJmFR7Fg</p>
                  </div>
                  <div class="container-right">
                    <h3>Plateforme :</h3>
                    <p>PC</p>
                    <h3>Type :</h3>
                    <p>Privée</p>
                    <h3>Heure</h3>
                    <p>09:00 PM CET</p>
                    <h3>Nb de joueurs</h3>
                    <p>
                      <span id="sub-players">1</span> /
                      <span id="total-players">16</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="divider-sheet-tournament-first"></div>
            <div class="description-tournament">
              <h3>Description</h3>
              <p>
                Tournoi inter-écoles organisé par La Manu : affrontez les
                meilleures équipes des écoles de votre région dans une
                compétition intense ! =^_^=
              </p>
              <div class="divider-sheet-tournament"></div>
              <h3>Règles</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                vel lectus ante. Suspendisse ac neque molestie, interdum velit
                eget, suscipit metus. Donec dignissim nulla mi, lacinia commodo
                quam vel. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Mauris vel lectus ante. Suspendisse ac neque molestie,
                interdum velit eget, suscipit metus. Donec dignissim nulla mi,
                lacinia commodo quam vel. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Mauris vel lectus ante. Suspendisse
                ac neque molestie, interdum velit eget, suscipit metus. Donec
                dignissim nulla mi, lacinia commodo quam vel.
              </p>
              <div class="divider-sheet-tournament"></div>
              <h3>Prix</h3>
              <p>
                1st : Lorem ipsum dolor sit amet,<br /><br />
                2nd & 3rd : Lorem ipsum dolor sit amet,<br /><br />
                3e & 5e : Lorem ipsum dolor sit amet,
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- DEBUT DE LA SECTION STRUCTURE DU TOURNOI -->
      <div class="main-container-structure">
        <div class="container-structure-tournament">
          <div class="title-sheet-tournament dropdown-structure-tournament">
            <h2>Structure du tournoi</h2>
            <img
              src="./assets/img/General/arrow-down-sign-to-navigate.png"
              alt="fleche pour ouvrir et fermer la fenetre des parametre"
              class="dropdown"
            />
          </div>
          <div class="structure-tournament">
            <div class="main-container-tree-tournament">
              <div class="main-container-round-title">
                <div class="container-round-title">
                  <div class="round-title">
                    <h5>Round 1</h5>
                  </div>
                </div>
                <div class="container-round-title">
                  <div class="round-title">
                    <h5>Quart de final</h5>
                  </div>
                </div>
                <div class="container-round-title">
                  <div class="round-title">
                    <h5>Demi-final</h5>
                  </div>
                </div>
                <div class="container-round-title">
                  <div class="round-title">
                    <h5>Final</h5>
                  </div>
                </div>
                <div class="container-round-title">
                  <div class="round-title">
                    <h5>Vainqueur</h5>
                  </div>
                </div>
              </div>
              <!-- DEBUT DE LA SECTION ARBRE DE TOURNOIS -->
              <div class="container-tree-tournament">
                <!-- SVG -->
                <svg
                  class="tournament-lines"
                  xmlns="http://www.w3.org/2000/svg"
                ></svg>

                <div class="round-one">
                  <div class="cell-tournament" data-index="1">
                    <p class="cell-team">équipe 1</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="2">
                    <p class="cell-team">équipe 2</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="3">
                    <p class="cell-team">équipe 3</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="4">
                    <p class="cell-team">équipe 4</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="5">
                    <p class="cell-team">équipe 5</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="6">
                    <p class="cell-team">équipe 6</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="7">
                    <p class="cell-team">équipe 7</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="8">
                    <p class="cell-team">équipe 8</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="9">
                    <p class="cell-team">équipe 9</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="10">
                    <p class="cell-team">équipe 10</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="11">
                    <p class="cell-team">équipe 11</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="12">
                    <p class="cell-team">équipe 12</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="13">
                    <p class="cell-team">équipe 13</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="14">
                    <p class="cell-team">équipe 14</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="15">
                    <p class="cell-team">équipe 15</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="16">
                    <p class="cell-team">équipe 16</p>
                    <span class="cell-result"> 0</span>
                  </div>
                </div>
                <div class="quarter-final">
                  <div class="cell-tournament" data-index="1">
                    <p class="cell-team">Vainqueur 1</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="2">
                    <p class="cell-team">Vainqueur 2</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="3">
                    <p class="cell-team">Vainqueur 3</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="4">
                    <p class="cell-team">Vainqueur 4</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="5">
                    <p class="cell-team">Vainqueur 5</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="6">
                    <p class="cell-team">Vainqueur 6</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="7">
                    <p class="cell-team">Vainqueur 7</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="8">
                    <p class="cell-team">Vainqueur 8</p>
                    <span class="cell-result"> 0</span>
                  </div>
                </div>
                <div class="semi-final">
                  <div class="cell-tournament" data-index="1">
                    <p class="cell-team">Demi-finaliste 1</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="2">
                    <p class="cell-team">Demi-finaliste 2</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="3">
                    <p class="cell-team">Demi-finaliste 3</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="4">
                    <p class="cell-team">Demi-finaliste 4</p>
                    <span class="cell-result"> 0</span>
                  </div>
                </div>
                <div class="final">
                  <div class="cell-tournament" data-index="1">
                    <p class="cell-team">Finaliste 1</p>
                    <span class="cell-result"> 0</span>
                  </div>
                  <div class="cell-tournament" data-index="2">
                    <p class="cell-team">Finaliste 2</p>
                    <span class="cell-result"> 0</span>
                  </div>
                </div>
                <div class="winner">
                  <div class="cell-tournament" data-index="1">
                    <p class="cell-team">Vainqueur Final</p>
                    <span class="cell-result"> 0</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-button-register">
        <button class="register-submit">S'inscrire</button>
      </div>
    </main>

    <!-- DEBUT FOOTER -->
    <footer>
      <div class="container-footer">
        <div class="contact">
          <h3>Contactez-nous</h3>
          <div class="divider-footer"></div>
          <p>Adresse Postale: 21 rue des geek 75001 Paris</p>
          <p>Email : Admin-gt@gaming-tournament.com</p>
          <p>Téléphone : 01.51.52.41.42. 43</p>
          <a
            href="https://www.legalstart.fr/fiches-pratiques/proteger-une-creation/mentions-legales/"
            target="_blank"
            class="block"
            >Mention-légales</a
          >
          <a
            href="https://www.legalstart.fr/fiches-pratiques/relations-commerciales/politique-confidentialite/"
            target="_blank"
            class="block"
            >Politique de confidentialité</a
          >
          <a href="https://www.facebook.com/?locale=fr_FR" target="_blank">
            <img src="./assets/img/General/facebook.png" alt="Icone facebook"
          /></a>
          <a href="https://www.instagram.com" target="_blank">
            <img
              src="./assets/img/General/instagram.png"
              alt="Icone instagram"
          /></a>
          <a href="https://x.com/?lang=fr" target="_blank">
            <img src="./assets/img/General/twitter.png" alt="Icone twitter"
          /></a>
        </div>

        <div class="copyright">
          <p>© 2024 GamingTournament, Incorporation. Tous droit réservés</p>
        </div>
      </div>
    </footer>

    <script src="./assets/javascript/tournamentSheet.js"></script>
    <script src="./assets/javascript/animationNavbar.js"></script>
    <script src="./assets/javascript/tournamentTreeSVG.js"></script>
  </body>
</html>
