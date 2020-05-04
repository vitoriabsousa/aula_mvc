<?php

namespace app\Controller;

use src\classes\ClassRender;
use src\interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{

    public function __construct(){
        $this->setTitle("Página Inicial");
        $this->setDescription("Projeto utilizando MVC");
        $this->setKeywords("mvc, projeto mvc, mvc completo");
        $this->setDir("home/");
        $this->renderLayout;
    }
}
?>