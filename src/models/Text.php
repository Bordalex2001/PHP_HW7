<?php

namespace App;

class Text extends Input
{
    private $placeholder;

    public function __construct($background, $width, $height, $name, $value, $placeholder)
    {
        parent:: __construct($background, $width, $height, $name, $value);
        $this->placeholder = $placeholder;
    }

    public function getPlaceholder()
    {
        return $this->placeholder;
    }
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }
}