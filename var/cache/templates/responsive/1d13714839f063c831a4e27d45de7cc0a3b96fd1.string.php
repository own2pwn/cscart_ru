<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:28:34
         compiled from "1d13714839f063c831a4e27d45de7cc0a3b96fd1" */ ?>
<?php /*%%SmartyHeaderCode:1247818954576263328399b0-63670663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d13714839f063c831a4e27d45de7cc0a3b96fd1' => 
    array (
      0 => '1d13714839f063c831a4e27d45de7cc0a3b96fd1',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1247818954576263328399b0-63670663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57626332845aa6_18902703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57626332845aa6_18902703')) {function content_57626332845aa6_18902703($_smarty_tpl) {?><?php if (!is_callable('smarty_function_call_phone')) include '/var/www/html/cscart_ru_i/app/addons/call_requests/functions/smarty_plugins/function.call_phone.php';
if (!is_callable('smarty_function_call_request')) include '/var/www/html/cscart_ru_i/app/addons/call_requests/functions/smarty_plugins/function.call_request.php';
?><?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['status']=="A") {?>
<div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><?php echo smarty_function_call_phone(array(),$_smarty_tpl);?>
  <span class="ty-cr-work">Пн-Пт с 9:00 до 18:00</span></div>
    <div class="ty-cr-link"><?php echo smarty_function_call_request(array(),$_smarty_tpl);?>
</div>
</div>
<?php }?><?php }} ?>