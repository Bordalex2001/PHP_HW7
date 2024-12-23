<?php

namespace App;

class Label extends Control
{
    private $for;

    public function __construct($background, $width, $height, $name, $value, $for)
    {
        parent:: __construct($background, $width, $height);
        $this->name = $name;
        $this->value = $value;
        $this->for = $for;
    }

    public function getParentName()
    {
        return $this->for;
    }
    public function setParentName($object)
    {
        if($object instanceof Button || $object instanceof Text)
        {
            $this->for = $object->getName();
        }
        else
        {
            throw new \Exception("Parameter must be an instance of Button or Text");
        }
    }
}