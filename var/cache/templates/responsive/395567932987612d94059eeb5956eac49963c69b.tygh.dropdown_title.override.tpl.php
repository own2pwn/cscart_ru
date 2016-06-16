<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 13:06:17
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/rus_theme_style/hooks/checkout/dropdown_title.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175751467957627a199a6586-65527273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '395567932987612d94059eeb5956eac49963c69b' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/rus_theme_style/hooks/checkout/dropdown_title.override.tpl',
      1 => 1465994907,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '175751467957627a199a6586-65527273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57627a19a27fd2_43325926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57627a19a27fd2_43325926')) {function content_57627a19a27fd2_43325926($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('my_cart','items','for','cart_is_empty','my_cart','items','for','cart_is_empty'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><i class="ty-minicart__icon ty-icon-basket<?php if ($_SESSION['cart']['amount']) {?> filled<?php } else { ?> empty<?php }?>"></i>
<span class="ty-minicart-title<?php if (!$_SESSION['cart']['amount']) {?> empty-cart<?php }?> ty-hand">
	<span class="ty-block ty-minicart-title__header ty-uppercase"><?php echo $_smarty_tpl->__("my_cart");?>
</span>
	   <span class="ty-block">
        <?php if ($_SESSION['cart']['amount']) {?>
            <?php echo htmlspecialchars($_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>
 <?php echo $_smarty_tpl->__("for");?>
&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("cart_is_empty");?>

        <?php }?>
       </span>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_theme_style/hooks/checkout/dropdown_title.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_theme_style/hooks/checkout/dropdown_title.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><i class="ty-minicart__icon ty-icon-basket<?php if ($_SESSION['cart']['amount']) {?> filled<?php } else { ?> empty<?php }?>"></i>
<span class="ty-minicart-title<?php if (!$_SESSION['cart']['amount']) {?> empty-cart<?php }?> ty-hand">
	<span class="ty-block ty-minicart-title__header ty-uppercase"><?php echo $_smarty_tpl->__("my_cart");?>
</span>
	   <span class="ty-block">
        <?php if ($_SESSION['cart']['amount']) {?>
            <?php echo htmlspecialchars($_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>
 <?php echo $_smarty_tpl->__("for");?>
&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("cart_is_empty");?>

        <?php }?>
       </span>
</span>
<?php }?><?php }} ?>
