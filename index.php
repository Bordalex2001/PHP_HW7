<?php

use App\Button;
use App\Control;
use App\Label;
use App\Text;
require_once __DIR__ . '/vendor/autoload.php';

function convertToHTML($control)
{
    if(!$control instanceof Control)
    {
        throw new Exception("Parameter must be instance of Control");
    }

    $name = $control->getName();
    $value = $control->getValue();
    $style = "background-color: " . $control->getBackground() . "; width: " . $control->getWidth() . "px; height: " . $control->getHeight() . "px;";

    if($control instanceof Button)
    {
        return "<input type='button' name='" . $name . "' value='" . $value . "' style='" . $style . "'>";
    }
    elseif($control instanceof Text)
    {
        $placeholder = $control->getPlaceholder();
        return "<input type='text' name='$name' value='$value' placeholder='$placeholder' style='" . $style . "'>";
    }
    elseif($control instanceof Label)
    {
        $for = $control->getParentName();
        return "<label for='$for' style='" .$style. "'>$value</label>";
    }
    else
    {
        throw new Exception("Unsupported Control type");
    }
}

try
{
    $button = new Button('red', 200, 50, 'button1', 'Button1', true);
    $text = new Text('white', 100, 50, 'text1', 'Text1', 'Text1');
    $label = new Label('orange', 100, 50, 'label1', 'Label1', $text);

    echo convertToHTML($button);
    echo convertToHTML($text);
    echo convertToHTML($label);
}
catch(Exception $ex)
{
    echo 'Error: ' . $ex->getMessage();
}