<?php

require_once("../src/vendor/autoload.php");
require_once("../config/config.php");

use src\classes\ClassRoutes;

class Teste extends ClassRoutes{
        public function __construct(){
            $v=$this->getRota();
            var_dump($v);
        }
}
$new = new Teste();
?>