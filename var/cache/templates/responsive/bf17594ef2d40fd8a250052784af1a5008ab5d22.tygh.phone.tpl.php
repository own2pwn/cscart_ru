<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:28:53
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/views/orders/components/payments/phone.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56417349257626345a6ef43-89415807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf17594ef2d40fd8a250052784af1a5008ab5d22' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/views/orders/components/payments/phone.tpl',
      1 => 1465994887,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '56417349257626345a6ef43-89415807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57626345acd102_23384422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57626345acd102_23384422')) {function content_57626345acd102_23384422($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('phone','phone'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-control-group">
    <label for="customer_phone" class="ty-control-group__title"><?php echo $_smarty_tpl->__("phone");?>
</label>
    <input id="customer_phone" size="35" type="text" name="payment_info[customer_phone]" value="<?php if (!$_smarty_tpl->tpl_vars['cart']->value['payment_info']['customer_phone']&&$_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_info']['customer_phone'], ENT_QUOTES, 'UTF-8');
}?>" class="ty-input-text cm-autocomplete-off" />
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/phone.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/phone.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-control-group">
    <label for="customer_phone" class="ty-control-group__title"><?php echo $_smarty_tpl->__("phone");?>
</label>
    <input id="customer_phone" size="35" type="text" name="payment_info[customer_phone]" value="<?php if (!$_smarty_tpl->tpl_vars['cart']->value['payment_info']['customer_phone']&&$_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_info']['customer_phone'], ENT_QUOTES, 'UTF-8');
}?>" class="ty-input-text cm-autocomplete-off" />
</div><?php }?><?php }} ?>
