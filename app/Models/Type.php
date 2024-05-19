<?php

use app\utils\Database;

class Type extends CoreModel
{

    private $footer_order;

    public function  getFooterOrder()
    {
        return $this->footer_order;
    }

    public function setDescription($footer_order)
    {
        $this->footer_order = $footer_order;
    }

    public function findAll()
    {
        $pdoDBConnexion = Database::getPDO();

        $sql = 'SELECT * FROM `type`';
        $pdoStatment = $pdoDBConnexion->query($sql);

        $typeList = $pdoStatment->fetchAll(PDO::FETCH_CLASS, 'type');

        return $typeList;
    }


    public function find($id)
    {
        $pdoDBConnexion = Database::getPDO();

        $sql = 'SELECT * FROM `type` WHERE  `id` = ' . $id;
        $pdoStatment = $pdoDBConnexion->query($sql);

        $typeOnly = $pdoStatment->fetchObject('type');
        return $typeOnly;

    }


      // retourne 5 espèces
      public function findFooterOrder()
      {
          $pdoDBConnexion = Database::getPDO();
  
          $sql = 'SELECT * 
                  FROM `type`
                  WHERE `footer_order` > 0
                  ORDER BY `footer_order`
                  LIMIT 5';
      
          $pdoStatment = $pdoDBConnexion->query($sql);
  
          $footerOrderType = $pdoStatment->fetchAll(PDO::FETCH_CLASS, 'type');
  
          return $footerOrderType;
  
      }


}
