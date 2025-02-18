<?php
require 'models/database.php'; //fonction de connexion database
require 'utils/utils.php'; // fonction affichage views / template

$path = $_SERVER['REDIRECT_URL']; 

if ($path == '/ProjetSiteGamingTournament/Developpement/') {    
    require 'controllers/indexController.php';  
}else  {
    $path = explode('ProjetSiteGamingTournament/Developpement/', $path)[1];  

    $controllerFilePath = 'controllers/' . $path . 'Controller.php'; 

    if (file_exists($controllerFilePath)) { 
        require $controllerFilePath; 
    }else {
        require 'views/404.php'; 
    }

}
 

 
 //  ------------------------------------------------------------------------------------------------------------------------------------------
//  <?php
//  require 'models/database.php'; //fonction de connexion database
//  require 'utils/utils.php'; // fonction affichage views / template
 
//  $path = $_SERVER['REDIRECT_URL']; // on récupere le chemin qui sera dans l'url (aprés localhost en local)
//  //exemple de valeur récupéré dans ce cas : '/CoursMvcNicolas/' (seulement '/' si je serait directement a la racine de laragon)
//  //ou alors  '/CoursMvcNicolas/profil'  (seulement /profil si je serait directement a la racine de laragon)
 
//  if ($path == '/ProjetSiteGamingTournament/Developpement/') {    // only '/' quand on se trouve directement a la racine (ici sous laragon j'ai plusieur projet)
//      require 'controllers/indexController.php';  //si je suis a la racine je charge l'index (l'accueil)
//  }else  {
//      $path = explode('ProjetSiteGamingTournament/Developpement/', $path)[1];  //on enleve /CoursMvcNicolas/ de l'url (only '/' si le projet est a la racine) pour récupéré que le nom de la page
 
//      $controller = 'controllers/' . $path . 'Controller.php'; //on recupere le bon fichier (ça évite une condition pour chaque pages car l'url correspond au nom du fichier controller (ce qui n'est pas le cas pour l'index car il est appeler quand on est a la racine) )
 
//      if (file_exists($controller)) { //vérifie que le fichier éxiste
//          require $controller; // si le fichier existe on le charge
//      }else {
//          require 'views/404.php'; //sinon une erreur
//      }
 
//  }
  // * NOTE * dans cette version du routeur le nom du chemin qui redirige vers les pages, doivent être identique au nom du controller             c'est -----OBLIGATOIRE-----


 //----------------------------------------------------------------------------------

