<?php

class CoreModel
{

    public $id;
    public $name;

    public function  getId()
    {
        return $this->id;
    }

    public function  getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


}