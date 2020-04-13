<?php

header ("Context-Type: text/html; charset=utf-8");
require_once("../src/vendor/autoload.php");
require_once("../config/config.php");

$Dispatch = new app\Dispatch();

// use src\classes\ClassRoutes;

// class Teste extends ClassRoutes{
//         public function __construct(){
//             $v=$this->getRota();
//             var_dump($v);
//         }
// }
// $new = new Teste();
// ?>