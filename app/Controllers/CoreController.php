<?php

class CoreController 
{
 
    public function show($viewName, $viewData = [])
    {
        global $router;
        $absoluteUrl = $_SERVER['BASE_URI'];

        
        $type = new Type();
        $footerOrderType = $type->findFooterOrder();
        
        $speciceList  = new Specie();
        $specieObjects = $speciceList->findAll();


        $categoryInstancie = new Category;
        $categoryList = $categoryInstancie->findAll();
      
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
       
    }

   

}