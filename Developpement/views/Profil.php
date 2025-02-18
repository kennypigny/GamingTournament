<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil</title>
    <!-- font ROBOTO CONDENSED -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <!----------------------------------- -->
    <link rel="stylesheet" href="./assets/css/navbar.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
    <link rel="stylesheet" href="./assets/css/profilPrivate.css" />
    <link rel="stylesheet" href="./assets/css/cardResumeTournament.css">
  </head>
  <body>
    <header>
      
      <?php render('navbar', true); ?> <!-- AJout de la navbar -->

      <!-- PHOTO DE PROFIL ET BANNIERE QU ON PEUX CHANGER AU CLICK -->
      <div class="container-banner-photo">
        <div class="banner-photo-profil">
          <div class="photo">
            <img
              id="photo-profil"
              src="./assets/img/General/addPhoto.jpg"
              alt="Photo de profil"
            />
            <input
              type="file"
              id="upload-photo"
              name="upload-photo"
              accept="images/*"
            />
          </div>
          <div class="banner">
            <img
              id="banner-profil"
              src="./assets/img/General/addPhoto612x612.jpg"
              alt="Bannière de profil"
            />
            <input
              type="file"
              id="upload-banner"
              name="upload-banner"
              accept="images/*"
            />
          </div>
        </div>
      </div>
    </header>
    <!-- DEBUT DU MAIN -->
    <main>
      <!-- CONTAINER PRINCIPAL QUI CONTIENT GENERAL / CHANGEMENT DE MOT DE PASSE et D EMAIL / SUPRESSION DU COMPTE -->

      <div class="container-info-profil">
        <div class="info-general">
          <!-- CONTAINER  GENERAL -->
          <form action="">
            <div class="general box-info">
              <div class="title-container-profil">
                <h2>Général</h2>
                <img
                  src="./assets/img/General/arrow-down-sign-to-navigate.png"
                  alt="fleche pour ouvrir et fermer la fenetre des parametre"
                  class="dropdown dropdown-general-profil"
                />
              </div>
              <div class="box-general box-dropdown">
                <label for="firstname-user">Nom : </label>
                <input
                  name="firstname-user"
                  id="firstname-user"
                  type="text"
                  required
                />
                <p class="message-error letter-error-firstname">
                  Le nom doit contenir seulement les caractères a-z et A-Z
                </p>
                <label for="secondname-user">Prénom : </label>
                <input
                  name="secondname-user"
                  id="secondname-user"
                  type="text"
                  required
                />
                <p class="message-error letter-error-secondname">
                  Le prénom doit contenir seulement les caractères a-z et A-Z
                </p>
                <label for="nickname-user">Pseudo : </label>
                <input
                  name="nickname-user"
                  id="nickname-user"
                  type="text"
                  required
                />
                <p class="message-error letter-error-nickname">
                  Le pseudo doit contenir seulement les caractères a-z , A-Z
                </p>
                <label for="country-user">Pays : </label>
                <select name="country-user" id="country-user" required>
                  <option value="" selected>--Choisissez un pays--</option>
                  <option value="france">France</option>
                  <option value="espagne">Espagne</option>
                  <option value="angleterre">angleterre</option>
                  <option value="allemagne">Allemagne</option>
                  <option value="belgique">Belgique</option>
                  <option value="suisse">Suisse</option>
                </select>
                <div class="container-button-update">
                  <button class="button-update" id="button-general">Mettre a jour</button>
                </div>
              </div>
            </div>

            <!-- CONTAINER CHANGE PASSWORD -->
            <div class="change-password box-info">
              <div class="title-container-profil">
                <h2>Changement de mot de passe</h2>
                <img
                  src="./assets/img/General/arrow-down-sign-to-navigate.png"
                  alt="fleche pour ouvrir et fermer la fenetre des parametre"
                  class="dropdown dropdown-change-password"
                />
              </div>
              <div class="box-change-password box-dropdown">
                <label for="password-now">Mot de passe actuel : </label>
                <input name="password-now" id="password-now" type="password" required />
                <label for="new-password">Nouveau mot de passe : </label>
                <input
                  name="new-password"
                  id="new-password"
                  type="password"
                  required
                />
                <p class="message-error password-error">
                  Le mot de passe doit contenir au moins 8 caractères, une
                  majuscule, une minuscule, un chiffre et un caractère spécial.
                </p>
                <label for="verify-password"
                  >Retapez votre nouveau mot de passe :
                </label>
                <input
                  name="verify-password"
                  id="verify-password"
                  type="password"
                  required
                />
                <p class="message-error password-error-confirm">
                  Le mot de passe ne correspond pas.
                </p>
                <div class="container-button-update">
                  <button class="button-update" id="button-change-password">
                    Mettre a jour
                  </button>
                </div>
              </div>
            </div>

            <!-- CONTAINER CHANGE EMAIL -->
            <div class="change-mail box-info">
              <div class="title-container-profil">
                <h2>Changement d'email</h2>
                <img
                  src="./assets/img/General/arrow-down-sign-to-navigate.png"
                  alt="fleche pour ouvrir et fermer la fenetre des parametre"
                  class="dropdown dropdown-change-mail"
                />
              </div>
              <div class="box-change-mail box-dropdown">
                <label for="password-now-mail">Mot de passe actuel : </label>
                <input
                  name="password-now-mail"
                  id="password-now-mail"
                  type="password"
                />
                <label for="new-mail">Nouvelle email : </label>
                <input name="new-mail" id="new-mail" type="text" required />
                <div class="container-button-update">
                  <p class="message-error new-email-error">
                    Entrer une adresse email valide.
                  </p>
                  
                </div>
                <button class="button-update" id="button-change-mail">
                  Mettre a jour
                </button>
              </div>
            </div>

            <!-- CONTAINER DELETE ACCOUNT -->
            <div class="delete-account box-info">
              <div class="title-container-profil">
                <h2>Supprimer mon compte</h2>
                <img
                  src="./assets/img/General/arrow-down-sign-to-navigate.png"
                  alt="fleche pour ouvrir et fermer la fenetre des parametre"
                  class="dropdown dropdown-delete-account"
                />
              </div>
              <div class="box-delete box-dropdown">
                <label for="delete-account">Mot de passe actuel : </label>
                <input
                  name="delete-account"
                  id="delete-account"
                  type="password"
                />
                <div class="container-button-update">
                  <button class="button-update">Supprimer</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- HISTORIQUE DES TOURNOIS -->
      <div class="container-history">
        <div class="history-tournament-profil">
          <div class="container-card">
            <div class="title-container-profil">
              <h2>Historique de mes tournois</h2>
              <img
                src="./assets/img/General/arrow-down-sign-to-navigate.png"
                alt="fleche pour ouvrir et fermer la fenetre des parametre"
                class="dropdown dropdown-history-profil"
              />
            </div>

            <div class="box-history-profil box-dropdown">
              <!-- carte tournois -->
              <div class="card-tournament">
                <a href="./tournamentSheet.html" target="_blank">
                  <div class="banner-card-tournament"></div>
                  <h4>
                    T1 tournament | 16 teams | direct elimination | Cashprize
                    2500RP
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
                    <p>Terminé</p>
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
                <a href="./tournamentSheet.html" target="_blank">
                  <div class="banner-card-tournament"></div>
                  <h4>
                    T1 tournament | 16 teams | direct elimination | Cashprize
                    2500RP
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
                    <p>Terminé</p>
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
                <a href="./tournamentSheet.html" target="_blank">
                  <div class="banner-card-tournament"></div>
                  <h4>
                    T1 tournament | 16 teams | direct elimination | Cashprize
                    2500RP
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
                    <p>Terminé</p>
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
                <a href="./tournamentSheet.html" target="_blank">
                  <div class="banner-card-tournament"></div>
                  <h4>
                    T1 tournament | 16 teams | direct elimination | Cashprize
                    2500RP
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
                    <p>Terminé</p>
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
                <a href="./tournamentSheet.html" target="_blank">
                  <div class="banner-card-tournament"></div>
                  <h4>
                    T1 tournament | 16 teams | direct elimination | Cashprize
                    2500RP
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
                    <p>Terminé</p>
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
                <a href="./tournamentSheet.html" target="_blank">
                  <div class="banner-card-tournament"></div>
                  <h4>
                    T1 tournament | 16 teams | direct elimination | Cashprize
                    2500RP
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
                    <p>Terminé</p>
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
                <a href="./tournamentSheet.html" target="_blank">
                  <div class="banner-card-tournament"></div>
                  <h4>
                    T1 tournament | 16 teams | direct elimination | Cashprize
                    2500RP
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
                    <p>Terminé</p>
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
                <a href="./tournamentSheet.html" target="_blank">
                  <div class="banner-card-tournament"></div>
                  <h4>
                    T1 tournament | 16 teams | direct elimination | Cashprize
                    2500RP
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
                    <p>Terminé</p>
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
        </div>
      </div>
    </main>
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
    <script src="./assets/javascript/profilPrivate.js"></script>
    <script src="./assets/javascript/animationNavbar.js"></script>
  </body>
</html>
