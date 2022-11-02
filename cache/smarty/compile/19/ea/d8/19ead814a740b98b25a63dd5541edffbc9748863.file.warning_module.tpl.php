<?php /* Smarty version Smarty-3.1.19, created on 2022-11-02 20:22:11
         compiled from "/var/www/html/admin963otxko9/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2558306676362c3633d93c6-33029757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19ead814a740b98b25a63dd5541edffbc9748863' => 
    array (
      0 => '/var/www/html/admin963otxko9/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1556642532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2558306676362c3633d93c6-33029757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6362c3633f9431_34598529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6362c3633f9431_34598529')) {function content_6362c3633f9431_34598529($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
