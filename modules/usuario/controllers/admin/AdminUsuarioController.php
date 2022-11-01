<?php

require_once _PS_MODULE_DIR_ . 'usuario/UsuarioModel.php';

class AdminUsuarioController extends ModuleAdminController {

    public function __construct() {
        parent::__construct();

        $this->table = 'user';
        $this->identifier = 'id';
        $this->className = 'UsuarioModel';
        $this->allow_export = true;
        $this->bootstrap = true;

        // List records
        $this->_defaultOrderBy = 'a.id';
        $this->_defaultOrderWay = 'ASC';
        $this->_select = 'a.name as `Nombre`';
        $this->fields_list = [
            'id' => ['title' => 'ID','class' => 'fixed-width-xs'],
            'name' => ['title' => 'Nombre'],
            'lastname' => ['title' => 'Apellido'],
            'description' => ['title' => 'Descripcion'],
            'genre' => ['title' => 'Genero'],
        ];

        /*Edit and update records*/
        $this->addRowAction('details');
        $this->addRowAction('edit');
        $this->addRowAction('delete');
        $this->fields_form = [
            'legend' => [
                'title' => 'Informacion del usuario',
                'icon' => 'icon-user'
            ],
            'input' => [
                [
                    'type' => 'text',
                    'label' => 'Nombre',
                    'name' => 'name',
                    'required' => true,
                    'col' => 4,
                ],
                [
                    'type' => 'text',
                    'label' => 'Apellido',
                    'name' => 'lastname',
                    'required' => true,
                    'col' => 4,
                ],
                [
                    'type' => 'textarea',
                    'label' => 'Descripcion',
                    'name' => 'description',
                    'required' => true,
                    'col' => 4,
                ],
                [
                    'type' => 'select',
                    'label' => 'Genero',
                    'name' => 'genre',
                    'required' => true,
                    'col' => 4,
                    'options' => [
                        'query' => [
                            ['id' => 1, 'name' => 'Masculino'],
                            ['id' => 2, 'name' => 'Femenino'],
                            ['id' => 3, 'name' => 'Otro'],
                        ],
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                [
                    'type' => 'file',
                    'label' => 'Foto',
                    'name' => 'photo',
                    'required' => true,
                    'col' => 4,
                ],
            ],
            'submit' => [
                'title' => 'Guardar',
            ],
        ];
    }

    protected function getFromClause() {
        return str_replace(_DB_PREFIX_, '', parent::getFromClause());
    }

    public function init(){
        parent::init();
    }

    public function initContent(){
        parent::initContent();
        //$this->setTemplate('usuario.tpl');
        $this->bootstrap = true;
    }

}