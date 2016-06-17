<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:14:50
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/ship_rates/blocks/product_ship_rates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18239267245763f7ca99d511-88396675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c8267e4f23b869798b4d9015d3c9605e2397445' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/ship_rates/blocks/product_ship_rates.tpl',
      1 => 1466168905,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18239267245763f7ca99d511-88396675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ship_block_id' => 0,
    'block' => 0,
    'ship_product_groups' => 0,
    'group' => 0,
    'shipping' => 0,
    'rate' => 0,
    'tax' => 0,
    'inc_tax_lang' => 0,
    'delivery_time' => 0,
    'product' => 0,
    'key' => 0,
    'value' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763f7caae1901_59151632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763f7caae1901_59151632')) {function content_5763f7caae1901_59151632($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('free_shipping','free_shipping'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['ship_block_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['ship_block_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['block_id'], null, 0);?>
<?php }?>

<div id="product_ship_rates_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ship_block_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['ship_product_groups']->value) {?>

    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars["group_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ship_product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars["group_key"]->value = $_smarty_tpl->tpl_vars['group']->key;
?>

        <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
?>

                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']) {?>
                    <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable("(".((string)$_smarty_tpl->tpl_vars['shipping']->value['delivery_time']).")", null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable('', null, 0);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rate", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (", null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price']&&$_smarty_tpl->tpl_vars['shipping']->value['taxed_price']!=$_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array('default', "tax", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"ty-nowrap"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (".((string)$_smarty_tpl->tpl_vars['tax']->value)." ", null, 0);?>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars["inc_tax_lang"] = new Smarty_variable($_smarty_tpl->__('inc_tax'), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")", null, 0);?>
                    <?php }?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable($_smarty_tpl->__("free_shipping"), null, 0);?>
                <?php }?>

                <p class="ty-shipping-options__method">
                    <label class="ty-valign"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</label>
                </p>

        <?php } ?>

    <?php } ?>

<?php } else { ?>

    <?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {

            $.ceEvent('one', 'ce.commoninit', function(context) {

                var product_for_ship_rates = {
                    'product_id': <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');?>
,
                    'amount': 1,
                    'price': '<?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['product']->value['price']), ENT_QUOTES, 'UTF-8');?>
',
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['selected_options']) {?>
                    'product_options': {
                        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['selected_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
,
                        <?php } ?>
                    }
                    <?php }?>
                };

                $.ceAjax('request', fn_url('products.shipping_rates'), {
                    result_ids : 'product_ship_rates_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ship_block_id']->value, ENT_QUOTES, 'UTF-8');?>
',
                    hidden: true,
                    data: {
                        'product' : product_for_ship_rates,
                        'ship_block_id' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ship_block_id']->value, ENT_QUOTES, 'UTF-8');?>
',
                    },
                });

            });

        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>

<?php }?>

<!--product_ship_rates_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ship_block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ship_rates/blocks/product_ship_rates.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ship_rates/blocks/product_ship_rates.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['ship_block_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['ship_block_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['block_id'], null, 0);?>
<?php }?>

<div id="product_ship_rates_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ship_block_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['ship_product_groups']->value) {?>

    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars["group_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ship_product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars["group_key"]->value = $_smarty_tpl->tpl_vars['group']->key;
?>

        <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
?>

                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']) {?>
                    <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable("(".((string)$_smarty_tpl->tpl_vars['shipping']->value['delivery_time']).")", null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable('', null, 0);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rate", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (", null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price']&&$_smarty_tpl->tpl_vars['shipping']->value['taxed_price']!=$_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array('default', "tax", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"ty-nowrap"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (".((string)$_smarty_tpl->tpl_vars['tax']->value)." ", null, 0);?>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars["inc_tax_lang"] = new Smarty_variable($_smarty_tpl->__('inc_tax'), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")", null, 0);?>
                    <?php }?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable($_smarty_tpl->__("free_shipping"), null, 0);?>
                <?php }?>

                <p class="ty-shipping-options__method">
                    <label class="ty-valign"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</label>
                </p>

        <?php } ?>

    <?php } ?>

<?php } else { ?>

    <?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {

            $.ceEvent('one', 'ce.commoninit', function(context) {

                var product_for_ship_rates = {
                    'product_id': <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');?>
,
                    'amount': 1,
                    'price': '<?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['product']->value['price']), ENT_QUOTES, 'UTF-8');?>
',
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['selected_options']) {?>
                    'product_options': {
                        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['selected_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
,
                        <?php } ?>
                    }
                    <?php }?>
                };

                $.ceAjax('request', fn_url('products.shipping_rates'), {
                    result_ids : 'product_ship_rates_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ship_block_id']->value, ENT_QUOTES, 'UTF-8');?>
',
                    hidden: true,
                    data: {
                        'product' : product_for_ship_rates,
                        'ship_block_id' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ship_block_id']->value, ENT_QUOTES, 'UTF-8');?>
',
                    },
                });

            });

        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>

<?php }?>

<!--product_ship_rates_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ship_block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?><?php }} ?>
