<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:20:00
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/rus_payments/hooks/payments/processors_optgroups.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190058976957626130249526-11060463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4632ffaefc74f040ead350a48b62f7fdda6328d' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/rus_payments/hooks/payments/processors_optgroups.pre.tpl',
      1 => 1463494094,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '190058976957626130249526-11060463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_processors' => 0,
    'processor' => 0,
    'payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57626130268aa2_08102107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57626130268aa2_08102107')) {function content_57626130268aa2_08102107($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('russian_payments'));
?>
<optgroup label="<?php echo $_smarty_tpl->__("russian_payments");?>
">
    <?php  $_smarty_tpl->tpl_vars["processor"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["processor"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_processors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["processor"]->key => $_smarty_tpl->tpl_vars["processor"]->value) {
$_smarty_tpl->tpl_vars["processor"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['processor']->value['russian']=="Y") {?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']==$_smarty_tpl->tpl_vars['processor']->value['processor_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php }?>
    <?php } ?>
</optgroup>
<?php }} ?>
