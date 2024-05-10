<?php

class SpecieController
{

    public function specieAction($urlParams)
    {  
        $specieId = $urlParams['id'];
        $this->show('specie', ['specie_id' => $specieId]);
    }

    private function show($viewName, $viewData = [])
    {

        $absoluteUrl = $_SERVER['BASE_URI'];
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }



}