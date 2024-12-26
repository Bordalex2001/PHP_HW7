<?php

namespace App;

class Label extends Control
{
    private $for;

    public function __construct($background, $width, $height, $for_object)
    {
        parent:: __construct($background, $width, $height);
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setParentName($for_object);
    }

    public function getParentName()
    {
        return $this->for;
    }
    public function setParentName($for_object)
    {
        if($for_object instanceof Button || $for_object instanceof Text)
        {
            $this->for = $for_object->getName();
        }
        else
        {
            throw new \Exception("Parameter must be an instance of Button or Text");
        }
    }
}