<?php

class CategoryController extends CoreController
{

    public function categoryAction($urlParams)
    {
        $categoryId = $urlParams['id'];
        $this->show('category', ['category_id' => $categoryId]);

    

    }
}
