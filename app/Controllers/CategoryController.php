<?php

class CategoryController
{

    public function categoryAction($urlParams)
    {
        $categoryId = $urlParams['id'];
        $this->show('category', ['category_id' => $categoryId]);
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
