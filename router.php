<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$router = [
  '/' => './index.php',
  '/sobre' => './sobre.php',
  '/produtos' => './produtos.php',
  '/portifolio' => './portifolio.php',
  '/contato' => './contato.php',
];


function routeToController($uri, $router){
  if(array_key_exists($uri, $router)){
    require $router[$uri];
  }
}

function abort($code){
  http_response_code($code);
  require "./view/{$code}.php";
  die();
}

routeToController($uri,$router);