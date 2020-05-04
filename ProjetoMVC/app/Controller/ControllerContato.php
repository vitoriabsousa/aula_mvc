<?php

namespace app\Controller;

use src\classes\ClassRender;
use src\interfaces\InterfaceView;

class ControllerContato extends ClassRender implements InterfaceView{

    public function __construct(){
        
            $this->setTitle("Contato");
            $this->setDescription("Faça contato com a gente");
            $this->setKeywords("contato, telefone, email");
            $this->setDir("contato");
            $this->renderLayout;
    }
}
?>