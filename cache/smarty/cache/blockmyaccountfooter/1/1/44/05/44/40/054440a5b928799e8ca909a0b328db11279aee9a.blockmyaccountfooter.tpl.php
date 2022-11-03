<?php /*%%SmartyHeaderCode:17198551946363f6479c1de4-24200383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '054440a5b928799e8ca909a0b328db11279aee9a' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1556642532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17198551946363f6479c1de4-24200383',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6363f647e0d116_70103981',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6363f647e0d116_70103981')) {function content_6363f647e0d116_70103981($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost:8080/mi-cuenta" title="Administrar mi cuenta de cliente" rel="nofollow">Mi cuenta</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost:8080/historial-compra" title="Mis pedidos" rel="nofollow">Mis pedidos</a></li>
						<li><a href="http://localhost:8080/albaran" title="Mis facturas por abono" rel="nofollow">Mis facturas por abono</a></li>
			<li><a href="http://localhost:8080/direcciones" title="Mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://localhost:8080/datos-personales" title="Administrar mis datos personales" rel="nofollow">Mis datos personales</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
