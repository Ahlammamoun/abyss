<?php

use app\utils\Database;


class Category extends CoreModel
{

   
    private $subtitle;
    private $home_order;


    public function  getSubtitle()
    {
        return $this->subtitle;
    }

    public function  getHomeOrder()
    {
        return $this->home_order;
    }

   
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    public function setHomeOrder($home_order)
    {
        $this->home_order = $home_order;
    }

  
    public function findAll()
    {
        $pdoDBConnexion = Database::getPDO();

        $sql = 'SELECT * FROM `category`';
        $pdoStatment = $pdoDBConnexion->query($sql);

        $categoryList = $pdoStatment->fetchAll(PDO::FETCH_CLASS, 'category');

        return $categoryList;
    }


    public function find($id)
    {
        $pdoDBConnexion = Database::getPDO();

        $sql = 'SELECT * FROM `category` WHERE  `id` = ' . $id;
        $pdoStatment = $pdoDBConnexion->query($sql);

        $categoryOnly = $pdoStatment->fetchObject('category');
        return $categoryOnly;

    }




}
