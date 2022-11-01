<?php /* Smarty version Smarty-3.1.19, created on 2022-11-01 15:58:32
         compiled from "/var/www/html/modules/usuario/views/templates/admin/usuario/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:942310768636133241b17a9-26488229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee282e8b1afa095d1c4e8cb6a86f245a74a1f533' => 
    array (
      0 => '/var/www/html/modules/usuario/views/templates/admin/usuario/usuario.tpl',
      1 => 1667314708,
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
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form><?php }} ?>
