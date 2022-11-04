<?php /* Smarty version Smarty-3.1.19, created on 2022-11-04 15:38:07
         compiled from "/var/www/html/modules/usuario/views/templates/front/listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:764518037636523cf1cd903-29977643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ef250bc34fa0ca61ce3e7532f7c26d84d381669' => 
    array (
      0 => '/var/www/html/modules/usuario/views/templates/front/listar.tpl',
      1 => 1667572640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '764518037636523cf1cd903-29977643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_SERVER' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_636523cf23c590_74576861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_636523cf23c590_74576861')) {function content_636523cf23c590_74576861($_smarty_tpl) {?><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container">
    <div id="carousel" class="carousel slide pointer-event" data-ride="carousel" style="width:400px;margin:auto;">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1" class=""></li>
            <li data-target="#carousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REQUEST_URI'];?>
/modules<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['photo'];?>
" class="d-block w-100" alt="" onclick="showInformation('<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['lastname'];?>
', '<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['description'];?>
', '<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['genre'];?>
')">
                <div class="carousel-caption"><h3><?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['lastname'];?>
</h3></div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REQUEST_URI'];?>
/modules<?php echo $_smarty_tpl->tpl_vars['usuario']->value[1]['photo'];?>
" class="d-block w-100" alt="" onclick="showInformation('<?php echo $_smarty_tpl->tpl_vars['usuario']->value[1]['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['usuario']->value[1]['lastname'];?>
', '<?php echo $_smarty_tpl->tpl_vars['usuario']->value[1]['description'];?>
', '<?php echo $_smarty_tpl->tpl_vars['usuario']->value[1]['genre'];?>
')">
                <div class="carousel-caption"><h3><?php echo $_smarty_tpl->tpl_vars['usuario']->value[1]['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['usuario']->value[1]['lastname'];?>
</h3></div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REQUEST_URI'];?>
/modules<?php echo $_smarty_tpl->tpl_vars['usuario']->value[2]['photo'];?>
" class="d-block w-100" alt="" onclick="showInformation('<?php echo $_smarty_tpl->tpl_vars['usuario']->value[2]['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['usuario']->value[2]['lastname'];?>
', '<?php echo $_smarty_tpl->tpl_vars['usuario']->value[2]['description'];?>
', '<?php echo $_smarty_tpl->tpl_vars['usuario']->value[2]['genre'];?>
')">
                <div class="carousel-caption"><h3><?php echo $_smarty_tpl->tpl_vars['usuario']->value[2]['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['usuario']->value[2]['lastname'];?>
</h3></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<script>
    function showInformation(name, lastname, description, genre) {
        Swal.fire("Nombre: " + name + " " + "\nApellido: " + lastname + "\nDescripción: " + description + "\nGénero: " + genre);
    }
</script><?php }} ?>
