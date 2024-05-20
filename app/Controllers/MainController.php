<?php

class MainController extends CoreController
{
    // Méthode chargée de gérer la page 404
    public function pageNotFound()
    {
        // Pour avoir une "vraie" page 404, il faut que la réponse http
        // retourne un code 404 (au lieu du code 200 OK)
        header("HTTP/1.1 404 Not Found");
        $this->show('404');
    }

    // Méthode chargée de gérer la page d'accueil
    public function homeAction()
    {
        $this->show('home');
        $categoryOnly = new Category();

        $categoryObject = $categoryOnly->find(1);
        // dump($categoryObject);
        // dump($categoryObject->getHomeOrder());



    }

    public function legaleMentionsAction()
    {
        $this->show('mention-legal');
      
    }


   

}