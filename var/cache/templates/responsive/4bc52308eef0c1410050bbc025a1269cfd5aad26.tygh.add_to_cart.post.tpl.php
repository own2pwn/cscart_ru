<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 15:38:10
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/call_requests/hooks/products/add_to_cart.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2865513035763ef32ee6e36-23551568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc52308eef0c1410050bbc025a1269cfd5aad26' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/call_requests/hooks/products/add_to_cart.post.tpl',
      1 => 1465994898,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2865513035763ef32ee6e36-23551568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'hide_form' => 0,
    'addons' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763ef3305a830_42256961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763ef3305a830_42256961')) {function content_5763ef3305a830_42256961($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['hide_form']->value&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']=="Y") {?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'link_text'=>__("call_requests.buy_now_with_one_click"),'text'=>__("call_requests.buy_now_with_one_click"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__text ty-cr-product-button",'content'=>''), 0);?>


<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/products/add_to_cart.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/hooks/products/add_to_cart.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['hide_form']->value&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']=="Y") {?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'link_text'=>__("call_requests.buy_now_with_one_click"),'text'=>__("call_requests.buy_now_with_one_click"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__text ty-cr-product-button",'content'=>''), 0);?>


<?php }?>
<?php }?><?php }} ?>
