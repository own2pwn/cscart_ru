<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:20:06
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/my_payment/views/payments/components/cc_processors/my_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6644824885762613609a493-27021311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf61b76feb497d7fd3c72f540e9cdf871d80221f' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/my_payment/views/payments/components/cc_processors/my_payment.tpl',
      1 => 1466064918,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6644824885762613609a493-27021311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_576261360e4165_53440641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576261360e4165_53440641')) {function content_576261360e4165_53440641($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('addons.my_payment.login','addons.my_payment.password','test_live_mode','test','live','addons.my_payment.logging'));
?>
<div class="control-group">
    <label class="control-label" for="my_payment_login"><?php echo $_smarty_tpl->__("addons.my_payment.login");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][login]" id="my_payment_login" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['login'], ENT_QUOTES, 'UTF-8');?>
" size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="my_payment_password"><?php echo $_smarty_tpl->__("addons.my_payment.password");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][password]" id="my_payment_password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['password'], ENT_QUOTES, 'UTF-8');?>
" size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="mode"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]" id="mode">
            <option value="test" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="test") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
            <option value="live" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="live") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="logging"><?php echo $_smarty_tpl->__("addons.my_payment.logging");?>
:</label>
    <div class="controls">
        <input type="checkbox" name="payment_data[processor_params][logging]" id="logging" value="Y" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['logging']=='Y') {?> checked="checked"<?php }?>/>
    </div>
</div>

<?php }} ?>
