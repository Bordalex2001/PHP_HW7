<?php

namespace App;

class Button extends Input
{
    private $is_submit;

    public function __construct($background, $width, $height, $name, $value, $is_submit)
    {
        parent:: __construct($background, $width, $height, $name, $value);
        $this->is_submit = $is_submit;
    }

    public function getSubmitState()
    {
        return $this->is_submit;
    }
    public function setSubmitState($is_submit)
    {
        $this->is_submit = true;
    }
}