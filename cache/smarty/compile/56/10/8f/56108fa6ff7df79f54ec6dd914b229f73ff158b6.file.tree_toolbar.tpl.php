<?php /* Smarty version Smarty-3.1.19, created on 2022-11-04 14:26:04
         compiled from "/var/www/html/admin963otxko9/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:662877534636512ecc96f72-68491976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56108fa6ff7df79f54ec6dd914b229f73ff158b6' => 
    array (
      0 => '/var/www/html/admin963otxko9/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1556642532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '662877534636512ecc96f72-68491976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_636512ecef81a5_93771531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636512ecef81a5_93771531')) {function content_636512ecef81a5_93771531($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
