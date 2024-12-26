<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\Button;
use App\Label;
use App\Text;

function convertToHTML($control) {
    $style = "background-color: " . $control->getBackground() . "; width: " . $control->getWidth() . "px; height: " . $control->getHeight() . "px;";

    if ($control instanceof Button) {
        $is_submit = $control->getSubmitState() ? 'submit' : 'button';
        return "<input type='$is_submit' name='{$control->getName()}' value='{$control->getValue()}' style='" . $style . "'>";
    } elseif ($control instanceof Text) {
        $placeholder = $control->getPlaceholder();
        return "<input type='text' name='{$control->getName()}' value='{$control->getValue()}' placeholder='$placeholder' style='" . $style . "'>";
    } elseif ($control instanceof Label) {
        $for = $control->getParentName();
        return "<label for='$for' style='" . $style . "'>Label for $for</label>";
    }
    return '';
}

$button = new Button("red", 200, 50, "button1", "Button1", false);
$text = new Text("white", 100, 50, "text1", "", "Enter text...");
$label = new Label("orange", 100, 50, $text);

echo convertToHTML($button);
echo "<br>";
echo convertToHTML($text);
echo convertToHTML($label);