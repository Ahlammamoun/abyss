<?php

class TypeController
{

    public function typeAction($urlParams)
    {  
        $typeId = $urlParams['id'];
        $this->show('type', ['type_id' => $typeId]);
    }

    private function show($viewName, $viewData = [])
    {

        $absoluteUrl = $_SERVER['BASE_URI'];
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }



}