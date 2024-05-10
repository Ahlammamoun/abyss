<?php


// dependance autoload composer
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Controllers/TypeController.php';
require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/CategoryController.php';
require __DIR__ . '/../app/Controllers/SpecieController.php';

$router = new AltoRouter();
// dump($_SERVER);
$router->setBasePath($_SERVER['BASE_URI']);

$router->map(

    'GET', //method http autorisé pour cette route
    '/', //la partie url aprés la racine
    [
        'controller' => 'MainController',
        'method' => 'homeAction',
    ],
    'main-home', //identifiant unique pour cette route

);

$router->map(
    'GET', //method http autorisé pour cette route
    '/category/[i:id]', //la partie url aprés la racine
    [
        'controller' => 'CategoryController',
        'method' => 'categoryAction',
    ],
    'category', //identifiant unique pour cette route

);

$router->map(
    'GET', //method http autorisé pour cette route
    '/mention-legal/', //la partie url aprés la racine
    [
        'controller' => 'MainController',
        'method' => 'legaleMentionsAction',
    ],
    'main-mention-legal', //identifiant unique pour cette route

);

$router->map(
    'GET', //method http autorisé pour cette route
    '/type/[i:id]', //la partie url aprés la racine
    [
        'controller' => 'TypeController',
        'method' => 'typeAction',
    ],
    'type', //identifiant unique pour cette route

);

$router->map(
    'GET', //method http autorisé pour cette route
    '/specie/[i:id]', //la partie url aprés la racine
    [
        'controller' => 'SpecieController',
        'method' => 'specieAction',
    ],
    'specie', //identifiant unique pour cette route

);
$match = $router->match();
// dump($$match);
// exit();
if ($match !== false) {


    //on récupère dans $routeInfos toutes les infos  associé à notre route
    $routeInfos = $match['target'];
    // dump($routeInfos);

    //on récupère le nom du controller
    $controllerToUse = $routeInfos['controller'];


    //on récupère le nom de la méthod
    $methodToCall = $routeInfos['method'];

    //infos dynamique de l'url
    $urlParams = $match['params'];

    //var_dump($controllerToUse);
    //var_dump($methodToCall);

    //on instancie le bon controller
    $controller = new $controllerToUse();

    //on appel la méthod du bon controller
    $controller->$methodToCall($urlParams);
} else {
    //page 404 si la ressource n'est pas trouvée
    $controller = new MainController();
    $controller->pageNotFound();
}
