<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:28:30
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/twigmo/hooks/index/meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12460470705762632eeac447-47636412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab0d4b22a35a6505e3e02483bc9a05c1553e5cd0' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/twigmo/hooks/index/meta.post.tpl',
      1 => 1465994907,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12460470705762632eeac447-47636412',
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
  'unifunc' => 'content_5762632eef6f42_54858436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5762632eef6f42_54858436')) {function content_5762632eef6f42_54858436($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_SESSION['twg_state']['appstore_app_id']) {?>
    <meta name="apple-itunes-app" content="app-id=<?php echo htmlspecialchars($_SESSION['twg_state']['appstore_app_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/twigmo/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/twigmo/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_SESSION['twg_state']['appstore_app_id']) {?>
    <meta name="apple-itunes-app" content="app-id=<?php echo htmlspecialchars($_SESSION['twg_state']['appstore_app_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
<?php }?><?php }} ?>