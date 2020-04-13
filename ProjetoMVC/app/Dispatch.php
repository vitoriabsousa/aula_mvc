<?php 

namespace app;

use src\classes\ClassRoutes;

class Dispatch extends ClassRoutes {

    private $Method;
    private $Param = [];
    private $Obj;

    public function __construct (){
       self:: addController();
    }
    private function addController(){
        $RotaController = $this->getRota();
        $NameS = "app\\Controller\\($RotaController)";
        $this->Obj = new $NameS;

    }

    private function addMethod (){

    }

    private function addParam (){

    }

}
?>