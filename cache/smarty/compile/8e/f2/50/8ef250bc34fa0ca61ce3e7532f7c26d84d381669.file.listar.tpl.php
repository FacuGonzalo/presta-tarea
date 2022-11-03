<?php /* Smarty version Smarty-3.1.19, created on 2022-11-03 15:46:38
         compiled from "/var/www/html/modules/usuario/views/templates/front/listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15696841866363d44e7d9397-87686835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ef250bc34fa0ca61ce3e7532f7c26d84d381669' => 
    array (
      0 => '/var/www/html/modules/usuario/views/templates/front/listar.tpl',
      1 => 1667486736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15696841866363d44e7d9397-87686835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_SERVER' => 0,
    'usuario' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6363d44e801426_49393937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6363d44e801426_49393937')) {function content_6363d44e801426_49393937($_smarty_tpl) {?><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide pointer-event" data-ride="carousel" style="width:400px;margin:auto;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REQUEST_URI'];?>
/modules<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['photo'];?>
" class="d-block w-100" alt="me rompo">
            </div>
            <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = array_slice($_smarty_tpl->tpl_vars['usuario']->value,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                <div class="carousel-item">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REQUEST_URI'];?>
/modules<?php echo $_smarty_tpl->tpl_vars['u']->value['photo'];?>
" class="d-block w-100" alt="Absolute Balderdash">
                </div>
            <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div><?php }} ?>
