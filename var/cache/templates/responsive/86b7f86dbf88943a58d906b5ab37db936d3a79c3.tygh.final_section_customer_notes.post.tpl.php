<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 14:00:37
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/newsletters/hooks/checkout/final_section_customer_notes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1081340765763d855cb3d12-85066048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86b7f86dbf88943a58d906b5ab37db936d3a79c3' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/newsletters/hooks/checkout/final_section_customer_notes.post.tpl',
      1 => 1465994894,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1081340765763d855cb3d12-85066048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'tab_id' => 0,
    'page_mailing_lists' => 0,
    'list' => 0,
    'user_mailing_lists' => 0,
    'show_newsletters_content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763d855d432e5_80020165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763d855d432e5_80020165')) {function content_5763d855d432e5_80020165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_signup_for_subscriptions','text_signup_for_subscriptions'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->_capture_stack[0][] = array("mailing_lists", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(false, null, 0);?>

    <div class="ty-newsletters subscription-container" id="subsciption_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="mailing_lists" value="" />
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_mailing_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['list']->value['show_on_checkout']) {?>
                <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(true, null, 0);?>
            <?php }?>
            <div class="ty-newsletters__item<?php if (!$_smarty_tpl->tpl_vars['list']->value['show_on_checkout']) {?> hidden<?php }?>">
                <label><input type="checkbox" name="mailing_lists[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?> class="checkbox cm-news-subscribe" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>
</label>
            </div>
        <?php } ?>
    <!--subsciption_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['show_newsletters_content']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("text_signup_for_subscriptions")), 0);?>


    <?php echo Smarty::$_smarty_vars['capture']['mailing_lists'];?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/hooks/checkout/final_section_customer_notes.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/newsletters/hooks/checkout/final_section_customer_notes.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->_capture_stack[0][] = array("mailing_lists", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(false, null, 0);?>

    <div class="ty-newsletters subscription-container" id="subsciption_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="mailing_lists" value="" />
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_mailing_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['list']->value['show_on_checkout']) {?>
                <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(true, null, 0);?>
            <?php }?>
            <div class="ty-newsletters__item<?php if (!$_smarty_tpl->tpl_vars['list']->value['show_on_checkout']) {?> hidden<?php }?>">
                <label><input type="checkbox" name="mailing_lists[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]) {?>checked="checked"<?php }?> class="checkbox cm-news-subscribe" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>
</label>
            </div>
        <?php } ?>
    <!--subsciption_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['show_newsletters_content']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("text_signup_for_subscriptions")), 0);?>


    <?php echo Smarty::$_smarty_vars['capture']['mailing_lists'];?>

<?php }
}?><?php }} ?>
