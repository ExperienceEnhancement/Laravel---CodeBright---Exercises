<?php
__autoload();

use Organisms\Animals as Animals;
use Organisms\Flowers\Rose;

$dog = new Animals\Dog();
$dog->run();

$cat = new Animals\Cat();
$cat->drinkMilk();

$rose = new Rose();
$rose->grow();


function __autoload($className = null) {
    if (file_exists("organisms/animals/dog.php")) {
        require_once "organisms/animals/dog.php";
    }

    if (file_exists("organisms/animals/cat.php")) {
        require_once "organisms/animals/cat.php";
    }

    if (file_exists("organisms/animals/rabbit.php")) {
        require_once "organisms/animals/rabbit.php";
    }

    if (file_exists("organisms/flowers/rose.php")) {
        require_once "organisms/flowers/rose.php";
    }
}