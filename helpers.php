<?php

function basePath($path = '') {
    return __DIR__ . '/' . $path;

}
function loadView($name)
{
    $viewPath = basePath("views/{$name}.view.php");
    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View '{$name} not found!'";
    }
}

function loadPartial($name)
{
    $partialPath = basePath("views/partials/{$name}.php");
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial '{$name} not found!'";
    }
}

/**
 * Inspect a value(s) (and kill the script after)
 * @param mixed $value
 * @return void
 */

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

}

function inspectAndDie($value){
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}