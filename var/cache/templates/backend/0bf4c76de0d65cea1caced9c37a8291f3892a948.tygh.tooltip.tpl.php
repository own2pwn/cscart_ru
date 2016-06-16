<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:20:00
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93099222657626130279489-61548515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf4c76de0d65cea1caced9c37a8291f3892a948' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/common/tooltip.tpl',
      1 => 1463494094,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '93099222657626130279489-61548515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5762613028c0f5_92388654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5762613028c0f5_92388654')) {function content_5762613028c0f5_92388654($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
