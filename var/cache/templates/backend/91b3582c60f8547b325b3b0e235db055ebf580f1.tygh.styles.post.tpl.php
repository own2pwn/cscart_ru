<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:19:57
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/call_requests/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5321018695762612d36f1e6-39985385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91b3582c60f8547b325b3b0e235db055ebf580f1' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/call_requests/hooks/index/styles.post.tpl',
      1 => 1463494094,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5321018695762612d36f1e6-39985385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statuses' => 0,
    'status' => 0,
    'color' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5762612d392e19_62709614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5762612d392e19_62709614')) {function content_5762612d392e19_62709614($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.style.php';
?><?php echo smarty_function_style(array('src'=>"addons/call_requests/styles.less"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("styles", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable(fn_get_schema('call_requests','status_colors'), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['statuses']->value) {?>    
        <?php  $_smarty_tpl->tpl_vars["color"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["color"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["color"]->key => $_smarty_tpl->tpl_vars["color"]->value) {
$_smarty_tpl->tpl_vars["color"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["color"]->key;
?>
            .cr-btn-status-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
 {
                .buttonBackground(lighten(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
, 15%), darken(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
, 5%));
            }
        <?php } ?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_style(array('content'=>Smarty::$_smarty_vars['capture']['styles'],'type'=>"less"),$_smarty_tpl);?>

<?php }} ?>