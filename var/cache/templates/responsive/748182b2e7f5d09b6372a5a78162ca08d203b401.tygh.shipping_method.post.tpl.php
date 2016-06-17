<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 13:59:42
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/yandex_delivery/hooks/checkout/shipping_method.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13184909585763d81e65f2c4-84348182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748182b2e7f5d09b6372a5a78162ca08d203b401' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/yandex_delivery/hooks/checkout/shipping_method.post.tpl',
      1 => 1465994907,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13184909585763d81e65f2c4-84348182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'group_key' => 0,
    'cart' => 0,
    'shipping' => 0,
    'display' => 0,
    'selected' => 0,
    'delivery_time' => 0,
    'rate' => 0,
    'strong_begin' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763d81e72d5d3_07562311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763d81e72d5d3_07562311')) {function content_5763d81e72d5d3_07562311($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']&&$_smarty_tpl->tpl_vars['shipping']->value['module']=='yandex') {?>

    <?php if ($_smarty_tpl->tpl_vars['display']->value=="radio") {?>
        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display_type']=='CMS') {?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['yd']['data'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']]['pickup_points']) {?>
                <div class="clearfix">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/yandex_delivery/views/yandex_delivery/components/cms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            <?php }?>
        <?php } else { ?>
            <div class="clearfix">  
                <?php echo $_smarty_tpl->getSubTemplate ("addons/yandex_delivery/views/yandex_delivery/components/widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <?php }?>
        
    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</option>

    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
        <p>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');?>

        </p>
    <?php }?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/yandex_delivery/hooks/checkout/shipping_method.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/yandex_delivery/hooks/checkout/shipping_method.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']&&$_smarty_tpl->tpl_vars['shipping']->value['module']=='yandex') {?>

    <?php if ($_smarty_tpl->tpl_vars['display']->value=="radio") {?>
        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display_type']=='CMS') {?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['yd']['data'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']]['pickup_points']) {?>
                <div class="clearfix">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/yandex_delivery/views/yandex_delivery/components/cms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            <?php }?>
        <?php } else { ?>
            <div class="clearfix">  
                <?php echo $_smarty_tpl->getSubTemplate ("addons/yandex_delivery/views/yandex_delivery/components/widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <?php }?>
        
    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</option>

    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
        <p>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');?>

        </p>
    <?php }?>

<?php }
}?><?php }} ?>
