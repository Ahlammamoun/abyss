<?php

class TypeController
{

    public function typeAction($urlParams)
    {
        $typeId = $urlParams['id'];
        $this->show('type', ['type_id' => $typeId]);

        $typeList  = new Type();

        $typeObjects = $typeList->findAll();
        // dump($typeObjects);



    }

    private function show($viewName, $viewData = [])
    {
    


        $absoluteUrl = $_SERVER['BASE_URI'];

            $type = new Type();
        $footerOrderType = $type->findFooterOrder();
        // dump($typeObject);
        // dump($typeObject->getName());
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
