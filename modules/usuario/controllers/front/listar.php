<?php

class UsuarioListarModuleFrontController extends ModuleFrontController{

    public function init(){
        $this->page_name = 'usuario'; // page_name and body id
        $this->display_column_left = false; // hides left column
        parent::init();
    }

    public function initContent(){
        parent::initContent();
        $this->context->smarty->assign(array('path'=>'Usuario'));
        $this->setTemplate('listar.tpl');
        $usuario = Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'user');
        $this->context->smarty->assign(array('usuario'=>$usuario));
    }

    public function setMedia(){
        parent::setMedia();
        $this->addCSS(__PS_BASE_URI__.'modules/'.$this->module->name.'/css/'.$this->module->name.'.css');
        $this->addJS(__PS_BASE_URI__.'modules/'.$this->module->name.'/js/'.$this->module->name.'.js');
    }

}