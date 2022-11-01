<?php

class AdminUsuarioController extends ModuleAdminController {

    public function init(){
        parent::init();
    }

    public function initContent(){
        parent::initContent();
        $this->setTemplate('usuario.tpl');
    }

}