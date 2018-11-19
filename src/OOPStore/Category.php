<?php

namespace OOPStore;

class Category implements CategoryInterface
{
    //private
    //protected
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        // OR
        //$this->setName($name);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

     
}