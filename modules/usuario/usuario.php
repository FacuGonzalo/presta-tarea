<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Usuario extends Module {

    public function __construct() {
        $this->name = 'usuario'; // must match folder & file name
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Facundo Gonzalo';
        $this->bootstrap = true;
        $this->secure_key = Tools::encrypt($this->name);
        $this->need_instance = 0;
        $this->controllers = array('adminusuario');

        parent::__construct();

        $this->displayName = $this->l('Informacion sobre usuarios');
        $this->description = $this->l('Informacion sobre usuarios');
        $this->confirmUninstall = $this->l('¿Esta seguro que desea desinstalar?');
        $this->ps_versions_compliancy = ['min' => '1.6', 'max' => _PS_VERSION_];
    }

    public function install() {
        if (Shop::isFeatureActive())
            Shop::setContext(Shop::CONTEXT_ALL);

        return parent::install() &&
            $this->installModuleTab() &&
            $this->registerHook('leftColumn') &&
            $this->registerHook('header') &&
            Configuration::updateValue('usuario', 'my friend');
    }

    public function uninstall() {
        return $this->uninstallModuleTab() && parent::uninstall();
    }

    public function installModuleTab(){
        $tab = new Tab();
        $langs = Language::getLanguages();
        foreach ($langs as $lang) {
            $tab->name[$lang['id_lang']] = 'Usuarios';
        }
        $tab->module = $this->name;
        $tab->id_parent = 0;
        $tab->class_name = 'AdminUsuario';
        $tab->icon = 'settings_applications';

        return $tab->save();
    }

    public function uninstallModuleTab(){
        $id_tab = (int)Tab::getIdFromClassName('AdminUsuario');
        if ($id_tab) {
            $tab = new Tab($id_tab);
            return $tab->delete();
        }
        return false;
    }

}