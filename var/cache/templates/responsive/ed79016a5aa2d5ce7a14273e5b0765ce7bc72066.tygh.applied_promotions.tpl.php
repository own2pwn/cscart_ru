<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:28:54
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/views/checkout/components/applied_promotions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75786816576263464bd349-34635422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed79016a5aa2d5ce7a14273e5b0765ce7bc72066' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/views/checkout/components/applied_promotions.tpl',
      1 => 1465994887,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '75786816576263464bd349-34635422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'promotion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57626346542db4_04639187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57626346542db4_04639187')) {function content_57626346542db4_04639187($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_applied_promotions','text_applied_promotions'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="applied_promotions">
    <span class="ty-strong"><?php echo $_smarty_tpl->__("text_applied_promotions");?>
</span>
    <ul>
    <?php  $_smarty_tpl->tpl_vars["promotion"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["promotion"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['applied_promotions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["promotion"]->key => $_smarty_tpl->tpl_vars["promotion"]->value) {
$_smarty_tpl->tpl_vars["promotion"]->_loop = true;
?>
        <li>
            <?php if (trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['promotion']->value['short_description']))) {?>
                <a id="sw_promo_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['promotion_id'], ENT_QUOTES, 'UTF-8');?>
"class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
</a>
                <div id="promo_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['promotion_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content hidden"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>
</div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>

            <?php }?>
        </li>
    <?php } ?>
    </ul>
<!--applied_promotions--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/applied_promotions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/applied_promotions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="applied_promotions">
    <span class="ty-strong"><?php echo $_smarty_tpl->__("text_applied_promotions");?>
</span>
    <ul>
    <?php  $_smarty_tpl->tpl_vars["promotion"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["promotion"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['applied_promotions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["promotion"]->key => $_smarty_tpl->tpl_vars["promotion"]->value) {
$_smarty_tpl->tpl_vars["promotion"]->_loop = true;
?>
        <li>
            <?php if (trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['promotion']->value['short_description']))) {?>
                <a id="sw_promo_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['promotion_id'], ENT_QUOTES, 'UTF-8');?>
"class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
</a>
                <div id="promo_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['promotion_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content hidden"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>
</div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>

            <?php }?>
        </li>
    <?php } ?>
    </ul>
<!--applied_promotions--></div><?php }?><?php }} ?>
