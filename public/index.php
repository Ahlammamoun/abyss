<?php

require __DIR__ . '/../app/Controllers/MainController.php';

// s'il y a un paramétre d'url valide
if (isset($_GET['_url'])) {
    $pageToDisplay = $_GET['_url'];
} else {
    $pageToDisplay = '/';
}

$routes = [
    '/' => 'homeAction',
];

if (isset($routes[$pageToDisplay])) {
    $controller = new MainController();
    $methodeToCall = $routes[$pageToDisplay];
    $controller->$methodeToCall();
}else{
    $controller = new MainController();
    $controller->pageNotFound();
}

?>

