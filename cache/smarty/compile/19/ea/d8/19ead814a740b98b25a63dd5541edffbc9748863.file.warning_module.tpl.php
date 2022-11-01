<?php /* Smarty version Smarty-3.1.19, created on 2022-11-01 15:33:26
         compiled from "/var/www/html/admin963otxko9/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207527365563612e36a6e0b5-74592288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '207527365563612e36a6e0b5-74592288',
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
  'unifunc' => 'content_63612e36a999f0_64506751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63612e36a999f0_64506751')) {function content_63612e36a999f0_64506751($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
