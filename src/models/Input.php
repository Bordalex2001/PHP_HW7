<?php

namespace App;

class Input extends Control
{
    private $name;
    private $value;

    public function __construct($background, $width, $height, $name, $value)
    {
        parent:: __construct($background, $width, $height);
        $this->name = $name;
        $this->value = $value;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getValue()
    {
        return $this->value;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
}