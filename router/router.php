<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$router = [
  '/' => 'controller/index.php',
  '/sobre' => 'controller/sobre.php',
  '/produtos' => 'controller/produtos.php',
  '/portifolio' => 'controller/portifolio.php',
  '/contato' => 'controller/contato.php',
];


function routeToController($uri, $router){
  if(array_key_exists($uri, $router)){
    require $router[$uri];
  }else{
    abort(404);
  }
}

function abort($code){
  http_response_code($code);
  require "./view/{$code}.php";
  die();
}

routeToController($uri,$router);