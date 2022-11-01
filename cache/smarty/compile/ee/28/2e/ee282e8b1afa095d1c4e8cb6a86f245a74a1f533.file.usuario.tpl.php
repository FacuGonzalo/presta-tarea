<?php /* Smarty version Smarty-3.1.19, created on 2022-11-01 16:18:12
         compiled from "/var/www/html/modules/usuario/views/templates/admin/usuario/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:942310768636133241b17a9-26488229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee282e8b1afa095d1c4e8cb6a86f245a74a1f533' => 
    array (
      0 => '/var/www/html/modules/usuario/views/templates/admin/usuario/usuario.tpl',
      1 => 1667315890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '942310768636133241b17a9-26488229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_636133241d05c1_71568970',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636133241d05c1_71568970')) {function content_636133241d05c1_71568970($_smarty_tpl) {?><form>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="string" class="form-control" id="name" aria-describedby="name" placeholder="Ingrese un nombre">
    </div>
    <div class="form-group">
        <label for="lastname">Apellido</label>
        <input type="string" class="form-control" id="lastname" placeholder="Ingrese un apellido">
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" rows="3"></textarea>
    </div>
    <form>
        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="file" class="form-control-file" id="photo">
        </div>
    </form>
    <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="masculino" value="masculino">
            <label class="form-check-label" for="masculino">Masculino</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="femenino" value="femenino">
            <label class="form-check-label" for="femenino">Femenino</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="otro" value="otro">
            <label class="form-check-label" for="otro">Otro</label>
        </div>
    </div>
        <button type="submit" class="btn btn-primary">Guardar</button>

</form><?php }} ?>
