<?php /* Smarty version Smarty-3.1.19, created on 2022-11-04 15:37:36
         compiled from "/var/www/html/admin963otxko9/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767000565636523b0361a22-19926897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90d3ce618608900b283edfa2c9416f9b84196e22' => 
    array (
      0 => '/var/www/html/admin963otxko9/themes/default/template/content.tpl',
      1 => 1556642532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767000565636523b0361a22-19926897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_636523b037b072_64251517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636523b037b072_64251517')) {function content_636523b037b072_64251517($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
