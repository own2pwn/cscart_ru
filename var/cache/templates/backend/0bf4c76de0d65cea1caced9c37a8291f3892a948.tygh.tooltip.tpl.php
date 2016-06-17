<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:24
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20880624605763fe4012e995-60213713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf4c76de0d65cea1caced9c37a8291f3892a948' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/common/tooltip.tpl',
      1 => 1466167674,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20880624605763fe4012e995-60213713',
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
  'unifunc' => 'content_5763fe40168310_66955694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe40168310_66955694')) {function content_5763fe40168310_66955694($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
