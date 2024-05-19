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


}
