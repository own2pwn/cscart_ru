<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 13:06:16
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/buttons/go.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5067497657627a188a7842-19167265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b899a416be41ab7428d5fcc6e4a757ec8d535f8' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/buttons/go.tpl',
      1 => 1465994887,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5067497657627a188a7842-19167265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'alt' => 0,
    'but_text' => 0,
    'but_name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57627a188e5d47_02529491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57627a188e5d47_02529491')) {function content_57627a188e5d47_02529491($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><button title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alt']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-btn-go" type="submit"><?php if ($_smarty_tpl->tpl_vars['but_text']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');
} else { ?><i class="ty-btn-go__icon ty-icon-right-dir"></i><?php }?></button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/go.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/go.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><button title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alt']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-btn-go" type="submit"><?php if ($_smarty_tpl->tpl_vars['but_text']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');
} else { ?><i class="ty-btn-go__icon ty-icon-right-dir"></i><?php }?></button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php }?><?php }} ?>
