<?php

class SpecieController extends CoreController
{

    public function specieAction($urlParams)
    {  
        $specieId = $urlParams['id'];

        $productInstancier = new Specie;
        $specieObject = $productInstancier->findSpecieWithTypeAndCategory($specieId);

        // dump($specieObject);
        $this->show('specie', [
            'specie_object' => $specieObject
        ]);

    }
  

}