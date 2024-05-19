<?php

class SpecieController
{

    public function specieAction($urlParams)
    {  
        $specieId = $urlParams['id'];
        $this->show('specie', ['specie_id' => $specieId]);

        $speciceList  = new Specie();

        $specieObjects = $speciceList->findAll();
        // dump($specieObjects);
        

        $specieOnly = new Specie();
        $specieObject = $specieOnly->find(3);
        // dump($specieObject);
        // dump($specieObject->getName());

    }
    private function show($viewName, $viewData = [])
    {

        $absoluteUrl = $_SERVER['BASE_URI'];

        $type = new Type();
        $footerOrderType = $type->findFooterOrder();
        // dump($footerOrderType);

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }



}