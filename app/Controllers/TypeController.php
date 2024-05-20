<?php

class TypeController extends CoreController
{

    public function typeAction($urlParams)
    {
        $typeId = $urlParams['id'];
        $this->show('type', ['type_id' => $typeId]);

        $typeList  = new Type();

        $typeObjects = $typeList->findAll();
        // dump($typeObjects);



    }


}
