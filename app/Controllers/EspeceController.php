<?php

class especeController
{

    public function especeAction($urlParams)
    {
        $especeId = $urlParams['id'];
        $this->show('espece', ['espece_id' => $especeId]);
    }

    private function show($viewName, $viewData = [])
    {

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
