<?php /* Smarty version Smarty-3.1.19, created on 2022-11-03 21:37:22
         compiled from "/var/www/html/admin963otxko9/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1927299337636426821df1b3-21260204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0251a7fc7bf414b3d4c4bc3e6639293efeec7dba' => 
    array (
      0 => '/var/www/html/admin963otxko9/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1556642532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1927299337636426821df1b3-21260204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_636426822150c8_82912722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636426822150c8_82912722')) {function content_636426822150c8_82912722($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
