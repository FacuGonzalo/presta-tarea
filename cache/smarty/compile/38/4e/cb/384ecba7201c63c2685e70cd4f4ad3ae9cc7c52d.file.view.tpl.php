<?php /* Smarty version Smarty-3.1.19, created on 2022-11-04 15:37:35
         compiled from "/var/www/html/modules/usuario/views/templates/admin/usuario/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150896561636523af96a9f2-45894045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '384ecba7201c63c2685e70cd4f4ad3ae9cc7c52d' => 
    array (
      0 => '/var/www/html/modules/usuario/views/templates/admin/usuario/helpers/view/view.tpl',
      1 => 1667419992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150896561636523af96a9f2-45894045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'genre' => 0,
    '_SERVER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_636523af9b1556_66249106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636523af9b1556_66249106')) {function content_636523af9b1556_66249106($_smarty_tpl) {?><h2><b>Nombre:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</h2>
<h2><b>Apellido:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value->lastname;?>
</h2>
<h2><b>Descripción:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value->description;?>
</h2>
<h2><b>Género:</b> <?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
</h2>
<br />
<img src="<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REQUEST_URI'];?>
/modules<?php echo $_smarty_tpl->tpl_vars['user']->value->photo;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->lastname;?>
" width="200" height="200"><?php }} ?>
