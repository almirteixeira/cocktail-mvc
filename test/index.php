<?php

spl_autoload_register(function ($class) {
    require_once(str_replace('\\', '/', $class . '.php'));
});

use models\Cocktail as CocktailModels;
use controllers\Cocktail as CocktailControllers;

$cocktail = new CocktailModels();
$cocktail->selectByIngredients("vodka");

$o = new CocktailControllers();
$o->view('views/home');

?>