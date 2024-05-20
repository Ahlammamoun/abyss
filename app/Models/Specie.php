<?php

use app\utils\Database;

class Specie extends CoreModel
{
    private $description;
    private $picture;



    public function  getDescription()
    {
        return $this->description;
    }
    public function  getPicture()
    {
        return $this->picture;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function findAll()
    {
        $pdoDBConnexion = Database::getPDO();

        $sql = 'SELECT * FROM `specie`';
        $pdoStatment = $pdoDBConnexion->query($sql);

        $specieList = $pdoStatment->fetchAll(PDO::FETCH_CLASS, 'specie');

        return $specieList;
    }


    public function find($id)
    {
        $pdoDBConnexion = Database::getPDO();

        $sql = 'SELECT * FROM `specie` WHERE  `id` = ' . $id;
        $pdoStatment = $pdoDBConnexion->query($sql);

        $specieOnly = $pdoStatment->fetchObject('specie');
        return $specieOnly;
    }



    public function findSpecieWithTypeAndCategory($id)
    {

        $pdoDBConnexion = Database::getPDO();

        $sql =   'SELECT `specie`.*, `type`.`name` AS `type_name`, `category`.`name` AS `category_name`
        FROM   `specie`
        INNER JOIN `type` ON `specie`.`type_id` = `type`.`id`
        INNER JOIN `category` ON `specie` .`category_id` = `category`.`id`
        WHERE  `specie`.`id` = ' . $id;

        
        $pdoStatment = $pdoDBConnexion->query($sql);

        $specieWithTypeAndCategory = $pdoStatment->fetch(PDO::FETCH_ASSOC);
        return $specieWithTypeAndCategory;


    }


}
