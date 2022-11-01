<?php

require_once _PS_MODULE_DIR_ . 'usuario/UsuarioModel.php';

class AdminUsuarioController extends ModuleAdminController {

    public function __construct(){

        parent::__construct();

        $this->table = 'user';
        $this->identifier = 'id';
        $this->className = 'UsuarioModel';
        $this->allow_export = true;
        $this->bootstrap = true;
        $this->imageType = 'jpg';
        $this->max_image_size = (int)Configuration::get('PS_PRODUCT_PICTURE_MAX_SIZE');

        // List records
        $this->_defaultOrderBy = 'a.id';
        $this->_defaultOrderWay = 'ASC';
        $this->_select = 'a.name as `Nombre`';
        $this->fields_list = [
            'id' => ['title' => 'ID', 'class' => 'fixed-width-xs'],
            'photo' => ['title' => 'Foto', 'class' => 'image'],
            'name' => ['title' => 'Nombre'],
            'lastname' => ['title' => 'Apellido'],
            'description' => ['title' => 'Descripcion'],
            'genre' => ['title' => 'Genero'],
        ];

        $this->addRowAction('details');
        $this->addRowAction('edit');
        $this->addRowAction('delete');
        $this->addRowAction('view');
        $this->addRowAction('create');
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
                    'display_image' => true,
                    'size' => $this->max_image_size,
                    'label' => 'Foto',
                    'name' => 'photo',
                    'required' => true,
                    'col' => 4,
                    'action' => 'uploadImage',
                ],
            ],
            'submit' => [
                'title' => 'Guardar',
            ],
        ];
    }

    protected function uploadImage(){
        $id = (int)Tools::getValue('id');
        $image = $_FILES['photo'];
        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];
        $image_type = $image['type'];
        $image_size = $image['size'];
        $image_error = $image['error'];
        $image_ext = explode('.', $image_name);
        $image_ext = strtolower(end($image_ext));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if(in_array($image_ext, $allowed)){
            if($image_error === 0){
                if($image_size <= $this->max_image_size){
                    $image_name_new = uniqid('', true) . '.' . $image_ext;
                    $image_destination = _PS_MODULE_DIR_ . 'usuario/views/img/' . $image_name_new;
                    if(move_uploaded_file($image_tmp, $image_destination)){
                        $this->updateImage($id, $image_name_new);
                    }
                }
            }
        }
    }

    protected function getFromClause(){
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