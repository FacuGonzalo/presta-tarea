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
        $this->max_image_size = (int)Configuration::get('PS_PRODUCT_PICTURE_MAX_SIZE');

        $this->_defaultOrderBy = 'a.id';
        $this->_defaultOrderWay = 'ASC';
        $this->_select = 'a.name as `Nombre`';

        $this->addRowAction('view');
        $this->addRowAction('edit');
        $this->addRowAction('delete');

        $this->fields_list = [
            'id' => ['title' => 'ID', 'class' => 'fixed-width-xs'],
            'name' => ['title' => 'Nombre'],
            'lastname' => ['title' => 'Apellido'],
            'description' => ['title' => 'Descripcion'],
            'genre' => ['title' => 'Genero'],
        ];

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
                    'maxlength' => 20,
                    'col' => 4,
                ],
                [
                    'type' => 'text',
                    'label' => 'Apellido',
                    'name' => 'lastname',
                    'required' => true,
                    'maxlength' => 20,
                    'col' => 4,
                ],
                [
                    'type' => 'textarea',
                    'label' => 'Descripcion',
                    'name' => 'description',
                    'required' => true,
                    'maxlength' => 100,
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
                ],
            ],
            'submit' => [
                'title' => 'Guardar',
                'action' => $this->uploadImage(),
            ],
        ];
    }

    protected function uploadImage(){
        if (isset($_FILES['photo']) && isset($_FILES['photo']['tmp_name']) && !empty($_FILES['photo']['tmp_name'])) {
            if ($error = ImageManager::validateUpload($_FILES['photo'], Tools::getMaxUploadSize($_FILES['photo']))) {
                return $this->displayError($this->l($error));
            }
            else {
                $ext = substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'], '.') + 1);
                $file_name = md5($_FILES['photo']['name']).'.'.$ext;
                if (!move_uploaded_file($_FILES['photo']['tmp_name'], _PS_MODULE_DIR_ . 'usuario/img/'.$file_name)) {
                    return $this->displayError($this->l('Ocurrió un error al subir la imagen'));
                }
                else {
                    if (isset($this->object->photo) && !empty($this->object->photo)) {
                        @unlink(_PS_MODULE_DIR_ . 'usuario/img/'.$this->object->photo);
                    }
                    $path = '/usuario/img/'.$file_name;
                    $_POST['photo'] = $path;
                }
            }
        }
    }

    protected function getFromClause(){
        return str_replace(_DB_PREFIX_, '', parent::getFromClause());
    }

    public function renderView(){
        $this->tpl_view_vars = [
            'user' => $this->object,
            'genre' => $this->object->genre == 1 ? 'Masculino' : ($this->object->genre == 2 ? 'Femenino' : 'Otro'),
        ];
        return parent::renderView();
    }

    public function init(){
        parent::init();
    }

    public function initContent(){
        parent::initContent();
        $this->bootstrap = true;
    }

}