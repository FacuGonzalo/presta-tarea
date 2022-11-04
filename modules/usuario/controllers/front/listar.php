<?php

class UsuarioListarModuleFrontController extends ModuleFrontController{

    public function init(){
        $this->page_name = 'usuario';
        $this->display_column_left = false;
        parent::init();
    }

    public function initContent(){
        parent::initContent();
        $this->setTemplate('listar.tpl');
        $usuario = Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'user ORDER BY RAND() LIMIT 3');
        foreach ($usuario as $key => $value) {
            $usuario[$key]['genre'] = $value['genre'] == 1 ? 'Masculino' : ($value['genre'] == 2 ? 'Femenino' : 'Otro');
        }
        $this->context->smarty->assign(array(
                'usuario' => $usuario
            )
        );
    }

    public function setMedia(){
        parent::setMedia();
        $this->addCSS(__PS_BASE_URI__.'modules/'.$this->module->name.'/css/'.$this->module->name.'.css');
        $this->addJS(__PS_BASE_URI__.'modules/'.$this->module->name.'/js/'.$this->module->name.'.js');
    }

}