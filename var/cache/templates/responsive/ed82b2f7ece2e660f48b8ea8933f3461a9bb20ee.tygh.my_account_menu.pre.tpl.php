<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:14:27
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/rus_theme_style/hooks/profiles/my_account_menu.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10989642115763f7b36393c0-49563798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed82b2f7ece2e660f48b8ea8933f3461a9bb20ee' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/rus_theme_style/hooks/profiles/my_account_menu.pre.tpl',
      1 => 1466167683,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10989642115763f7b36393c0-49563798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763f7b3683c61_26809764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763f7b3683c61_26809764')) {function content_5763f7b3683c61_26809764($_smarty_tpl) {?><?php if (!is_callable('smarty_function_live_edit')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("title", null, null); ob_start(); ?>
    <a class="ty-account-info__title" href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
">
        <i class="ty-icon-moon-user"></i>
        <span class="hidden-phone" <?php echo smarty_function_live_edit(array('name'=>"block:name:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        <i class="ty-icon-down-micro ty-account-info__user-arrow"></i>
    </a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_theme_style/hooks/profiles/my_account_menu.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_theme_style/hooks/profiles/my_account_menu.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("title", null, null); ob_start(); ?>
    <a class="ty-account-info__title" href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
">
        <i class="ty-icon-moon-user"></i>
        <span class="hidden-phone" <?php echo smarty_function_live_edit(array('name'=>"block:name:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        <i class="ty-icon-down-micro ty-account-info__user-arrow"></i>
    </a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
