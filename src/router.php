<?php

// Je récupère le UserController pour avoir accès a la fonction login un peu plus bas

use src\Controllers\HomeController;
use src\Controllers\UserController;

// Je fais appel à mon système de routing custom
use src\Services\Routing;


// Instanciation de mon UserController pour pouvoir l'utiliser
$UserController = new UserController;


// $route est la route dans l'url, ex: http://localhost/ga/public/fims/123
$route = $_SERVER['REQUEST_URI'];

// $methode est la méthode http la requête qui accède au serveur 
// Elle se définis en javascript quand on fais un appel réseau 
// Exemple  de méthode : "GET" , "POST", "PUT", "PATCH" etc.... 
// Rappel, pour la définir en front, cela se fait dans le js 

// Avec le code JS ci dessous  /!\ , attention c'est du code JS pour le front, pas du php

// let params = {
  //  "method": "POST",
  //  "headers": {
  //     "Content-Type": "application/json; charset=utf-8"
  //  },

$methode = $_SERVER['REQUEST_METHOD'];



// $route compose décompose tous les paramètres d'url après l'url du serveur
// Par exemple , si mon url est  http://localhost/ga/public/films/delete/1
// $routeComposée sera un tableau contenant les paramètres après public entrecoupée par des / 
// donc ["film","delete","1"]
$routeComposee = Routing::routeComposee($route);



// j'utilise la boucle switch , pour gérer toutes les routes possibles dans mon application.
// c'est à dire que chaque partie accessible aura son propre case 
// Si j'ai une route login , il y a aura un case "login" etc...
  

$UserController = new UserController;

switch($route){
      case HOME_URL . "connexion":
            if (isset($_SESSION['connecté'])){
      header('location: ' . HOME_URL . 'dashboard');
      die;
    }else{
          $data = file_get_contents("php://input");
          // Cette data étant envoyée en JSON, je dois la decoder avec cette fonction
          $user = json_decode($data, true);
          $email = htmlspecialchars(strip_tags(trim($user["email"])));
          $password = htmlspecialchars(strip_tags(trim($user["password"])));
          $reponse =   $UserController->login($email, $password);
    }
    break;
}

  