<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 13:06:32
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/my_payment/views/orders/components/payments/my_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74144736757627a28d28786-73071040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fa37a3a6afed762208289ab828e59fcd5691713' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/my_payment/views/orders/components/payments/my_payment.tpl',
      1 => 1466070177,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '74144736757627a28d28786-73071040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'phone_normalize' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57627a28d68913_28686603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57627a28d68913_28686603')) {function content_57627a28d68913_28686603($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('my_payment.phone','my_payment.phone'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>Test
<div class="ty-qiwi">
    <div class="ty-qiwi__control-group ty-control-group">
        <label for="qiwi_phone_number" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("my_payment.phone");?>
</label>
        <input id="qiwi_phone_number" size="35" type="text" name="payment_info[phone]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_normalize']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-input-big cm-mask" />
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_payment/views/orders/components/payments/my_payment.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/my_payment/views/orders/components/payments/my_payment.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>Test
<div class="ty-qiwi">
    <div class="ty-qiwi__control-group ty-control-group">
        <label for="qiwi_phone_number" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("my_payment.phone");?>
</label>
        <input id="qiwi_phone_number" size="35" type="text" name="payment_info[phone]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_normalize']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-input-big cm-mask" />
    </div>
</div>
<?php }?><?php }} ?>
