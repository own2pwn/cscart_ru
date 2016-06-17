<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 13:59:51
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/optional_email/hooks/profiles/profile_fields.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16141171625763d827a4aeb0-14645032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc7d41c904ca3c41f2d84b15aa54bb86122e5654' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/optional_email/hooks/profiles/profile_fields.pre.tpl',
      1 => 1466160892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16141171625763d827a4aeb0-14645032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'field' => 0,
    'value' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763d827a91b12_29398655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763d827a91b12_29398655')) {function content_5763d827a91b12_29398655($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['field']->value['field_name']=='email') {?>

	<?php $_smarty_tpl->createLocalArrayVariable('field', null, 1);
$_smarty_tpl->tpl_vars['field']->value['required'] = 'N';
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];?>
	<?php if ($_smarty_tpl->tpl_vars['value']->value=='') {?>
		<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable('test', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['value'] = clone $_smarty_tpl->tpl_vars['value'];?>
	<?php }?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/optional_email/hooks/profiles/profile_fields.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/optional_email/hooks/profiles/profile_fields.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['field']->value['field_name']=='email') {?>

	<?php $_smarty_tpl->createLocalArrayVariable('field', null, 1);
$_smarty_tpl->tpl_vars['field']->value['required'] = 'N';
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];?>
	<?php if ($_smarty_tpl->tpl_vars['value']->value=='') {?>
		<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable('test', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['value'] = clone $_smarty_tpl->tpl_vars['value'];?>
	<?php }?>

<?php }
}?><?php }} ?>
