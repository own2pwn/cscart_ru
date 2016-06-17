<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 13:59:51
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/yandex_delivery/hooks/profiles/profile_fields.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1441843975763d8279d1d92-96611440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4049be989596325cbb7419e284c4c7ce610f01a0' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/yandex_delivery/hooks/profiles/profile_fields.pre.tpl',
      1 => 1465994907,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1441843975763d8279d1d92-96611440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'data_id' => 0,
    '_class' => 0,
    '_pos' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763d827a46ae2_08790010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763d827a46ae2_08790010')) {function content_5763d827a46ae2_08790010($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['data_id']->value,2), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_pos"] = new Smarty_variable(strpos($_smarty_tpl->tpl_vars['_class']->value,' cm-geolocation'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_class"] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['_class']->value,0,$_smarty_tpl->tpl_vars['_pos']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["_class"] = clone $_smarty_tpl->tpl_vars["_class"];?>

<?php if ($_smarty_tpl->tpl_vars['data_id']->value=='address'||$_smarty_tpl->tpl_vars['data_id']->value=='city'||$_smarty_tpl->tpl_vars['data_id']->value=='zipcode') {?>
    <?php $_smarty_tpl->tpl_vars["_class"] = new Smarty_variable((($_smarty_tpl->tpl_vars['_class']->value).(' cm-yad-')).($_smarty_tpl->tpl_vars['data_id']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["_class"] = clone $_smarty_tpl->tpl_vars["_class"];?>
<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/yandex_delivery/hooks/profiles/profile_fields.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/yandex_delivery/hooks/profiles/profile_fields.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['data_id']->value,2), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_pos"] = new Smarty_variable(strpos($_smarty_tpl->tpl_vars['_class']->value,' cm-geolocation'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_class"] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['_class']->value,0,$_smarty_tpl->tpl_vars['_pos']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["_class"] = clone $_smarty_tpl->tpl_vars["_class"];?>

<?php if ($_smarty_tpl->tpl_vars['data_id']->value=='address'||$_smarty_tpl->tpl_vars['data_id']->value=='city'||$_smarty_tpl->tpl_vars['data_id']->value=='zipcode') {?>
    <?php $_smarty_tpl->tpl_vars["_class"] = new Smarty_variable((($_smarty_tpl->tpl_vars['_class']->value).(' cm-yad-')).($_smarty_tpl->tpl_vars['data_id']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["_class"] = clone $_smarty_tpl->tpl_vars["_class"];?>
<?php }?>

<?php }?><?php }} ?>
