<?php /* Smarty version Smarty-3.1.19, created on 2022-11-04 14:26:11
         compiled from "/var/www/html/admin963otxko9/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2127744333636512f3c0af55-46252962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd42724fd64fca09c5e31664fa46e051dbe633a7' => 
    array (
      0 => '/var/www/html/admin963otxko9/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1556642532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2127744333636512f3c0af55-46252962',
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
  'unifunc' => 'content_636512f3c35960_42327325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636512f3c35960_42327325')) {function content_636512f3c35960_42327325($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
