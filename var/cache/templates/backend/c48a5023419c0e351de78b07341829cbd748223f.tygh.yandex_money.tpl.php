<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:41:40
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/rus_payments/views/payments/components/cc_processors/yandex_money.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16630805257626644b8f659-54657197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c48a5023419c0e351de78b07341829cbd748223f' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/rus_payments/views/payments/components/cc_processors/yandex_money.tpl',
      1 => 1463494094,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16630805257626644b8f659-54657197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avisio_url' => 0,
    'check_url' => 0,
    'fail_url' => 0,
    'success_url' => 0,
    'check_https' => 0,
    'processor_params' => 0,
    'ya_md5' => 0,
    'payment_id' => 0,
    'statuses' => 0,
    'k' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57626644e59a03_23607611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57626644e59a03_23607611')) {function content_57626644e59a03_23607611($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('information','text_yandex_money_urls','text_yandex_money_https','settings','test_live_mode','test','live','shop_id','scid','md5_shoppassword','generate','addons.rus_payments.logging','yandex_merchant_web_services','yandex_certificate_filename','addons.rus_payments.pkcs12_format','yandex_p12_password','addons.rus_payments.p12_password_descr','yandex_postponed_payments_enabled','yandex_unconfirmed_order_status','yandex_confirmed_order_status','yandex_canceled_order_status','yandex_returns_enabled','yandex_returned_order_status','yandex_payment_types','yandex_payment_yandex','yandex_payment_card','yandex_payment_terminal','yandex_payment_phone','yandex_payment_webmoney','yandex_payment_alfabank','yandex_payment_sberbank','yandex_payment_masterpass','yandex_payment_psbank','currency','currency_code_rur','currency_code_usd','currency_code_eur','currency_code_uah','currency_code_kzt'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/rus_payments/yandex_money.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["avisio_url"] = new Smarty_variable(fn_url("payment_notification.payment_aviso?payment=yandex_money",'C','https'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["check_url"] = new Smarty_variable(fn_url("payment_notification.check_order?payment=yandex_money",'C','https'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["fail_url"] = new Smarty_variable(fn_url("payment_notification.error?payment=yandex_money",'C','https'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["success_url"] = new Smarty_variable(fn_url("payment_notification.ok?payment=yandex_money",'C','https'), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("information"),'target'=>"#yandex_money_payment_instruction_".((string)$_REQUEST['payment_id'])), 0);?>

<div id="yandex_money_payment_instruction_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
" class="in collapse">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rus_payments:yandex_money_payment_instructions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rus_payments:yandex_money_payment_instructions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->__("text_yandex_money_urls",array("[avisio_url]"=>$_smarty_tpl->tpl_vars['avisio_url']->value,"[check_url]"=>$_smarty_tpl->tpl_vars['check_url']->value,"[fail_url]"=>$_smarty_tpl->tpl_vars['fail_url']->value,"[success_url]"=>$_smarty_tpl->tpl_vars['success_url']->value));?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rus_payments:yandex_money_payment_instructions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rus_payments:yandex_market_processor_https_text")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rus_payments:yandex_market_processor_https_text"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->tpl_vars["check_https"] = new Smarty_variable(defined("HTTPS"), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['check_https']->value) {?>
<?php echo $_smarty_tpl->__("text_yandex_money_https");?>

<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rus_payments:yandex_market_processor_https_text"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("settings"),'target'=>"#yandex_money_payment_settings_".((string)$_REQUEST['payment_id'])), 0);?>

<div id="yandex_money_payment_settings_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
" class="in collapse">

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
    <label class="control-label" for="shop_id"><?php echo $_smarty_tpl->__("shop_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][shop_id]" id="shop_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['shop_id'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large"  size="60" />
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="scid"><?php echo $_smarty_tpl->__("scid");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][scid]" id="scid" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['scid'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large"  size="60" />
    </div>
</div>

<div class="control-group" id="yandex_md5_div_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
">
    <label class="control-label" for="md5_shoppassword_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("md5_shoppassword");?>
:</label>
    <div class="controls">
        <input type="text" maxlength="20" size="21" name="payment_data[processor_params][md5_shoppassword]" id="md5_shoppassword_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['ya_md5']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['ya_md5']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['md5_shoppassword'], ENT_QUOTES, 'UTF-8');
}?>" class="input-text-large span4"  size="60" />
        <br />
        <a href="#" id="md5_generate_link_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("generate");?>
</a>
    </div>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript" class="cm-ajax-force">
    //<![CDATA[
        (function(_, $) {
        $(document).ready(function() {
          $('#md5_generate_link_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
').on('click', fn_get_md5_password_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
);
        });

        function fn_get_md5_password_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
() {
          var md5_shoppassword = $('#md5_shoppassword_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
').val();
          $.ceAjax('request', '<?php echo htmlspecialchars(fn_url("payments.yandex_get_md5_password"), ENT_QUOTES, 'UTF-8');?>
', {
          data: {
              payment: 'yandex_money',
              md5_shoppassword: md5_shoppassword,
              result_ids: 'yandex_md5_div_' + <?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
,
              payment_id: <?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
,
          },
          });
        }
        }(Tygh, Tygh.$));
    //]]>
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!--yandex_md5_div_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

</div>

<div class="control-group">
    <label class="control-label" for="logging"><?php echo $_smarty_tpl->__("addons.rus_payments.logging");?>
:</label>
    <div class="controls">
        <input type="checkbox" name="payment_data[processor_params][logging]" id="logging" value="Y" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['logging']=='Y') {?> checked="checked"<?php }?> class="input-text-large"  size="60" />
    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rus_payments:yandex_money_processor_mws_settings")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rus_payments:yandex_money_processor_mws_settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("yandex_merchant_web_services"),'target'=>"#yandex_merchant_web_services_".((string)$_REQUEST['payment_id'])), 0);?>

<div id="yandex_merchant_web_services_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
" class="in collapse">
    <fieldset>

        <div class="control-group">
            <label class="control-label" for="certificate_filename"><?php echo $_smarty_tpl->__("yandex_certificate_filename");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("addons.rus_payments.pkcs12_format")), 0);?>
 :</label>
            <div class="controls" id="certificate_filename">
                <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['certificate_filename']) {?>
                    <div class="text-type-value pull-left">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['certificate_filename'], ENT_QUOTES, 'UTF-8');?>

                        <a href="<?php echo htmlspecialchars(fn_url(('payments.delete_certificate?payment_id=').($_smarty_tpl->tpl_vars['payment_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax" data-ca-target-id="certificate_filename">
                            <i class="icon-remove-sign cm-tooltip hand" title="<?php echo $_smarty_tpl->__('remove');?>
"></i>
                        </a>
                    </div>
                <?php }?>

                <div <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['certificate_filename']) {?>class="clear"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"payment_certificate[]"), 0);?>
</div>
            <!--certificate_filename--></div>
        </div>

        <div class="control-group">
            <label class="control-label" for="yandex_p12_password"><?php echo $_smarty_tpl->__("yandex_p12_password");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("addons.rus_payments.p12_password_descr")), 0);?>
:</label>
            <div class="controls">
                <input type="text" name="payment_data[processor_params][p12_password]" id="yandex_p12_password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['p12_password'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="yandex_postponed_payments_enabled"><?php echo $_smarty_tpl->__("yandex_postponed_payments_enabled");?>
:</label>
            <div class="controls"><input type="checkbox" name="payment_data[processor_params][postponed_payments_enabled]" data-ca-payment-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="yandex_postponed_payments_enabled" class="cm-yandex-money-mws-enabled" value="Y"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['postponed_payments_enabled']=="Y") {?> checked="checked"<?php }?>></div>
        </div>

        <?php $_smarty_tpl->tpl_vars["statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER')), null, 0);?>

        <div class="control-group">
            <label class="control-label" for="yandex_unconfirmed_order_status"><?php echo $_smarty_tpl->__("yandex_unconfirmed_order_status");?>
:</label>
            <div class="controls">
                <select name="payment_data[processor_params][unconfirmed_order_status]" id="yandex_unconfirmed_order_status">
                    <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['unconfirmed_order_status']==$_smarty_tpl->tpl_vars['k']->value||!$_smarty_tpl->tpl_vars['processor_params']->value['unconfirmed_order_status']&&$_smarty_tpl->tpl_vars['k']->value==fn_get_storage_data('yandex_money_postponed_order_status')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="yandex_confirmed_order_status"><?php echo $_smarty_tpl->__("yandex_confirmed_order_status");?>
:</label>
            <div class="controls">
                <select name="payment_data[processor_params][confirmed_order_status]" id="yandex_confirmed_order_status">
                    <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['confirmed_order_status']==$_smarty_tpl->tpl_vars['k']->value||!$_smarty_tpl->tpl_vars['processor_params']->value['confirmed_order_status']&&$_smarty_tpl->tpl_vars['k']->value=='P') {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="yandex_canceled_order_status"><?php echo $_smarty_tpl->__("yandex_canceled_order_status");?>
:</label>
            <div class="controls">
                <select name="payment_data[processor_params][canceled_order_status]" id="yandex_canceled_order_status">
                    <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['canceled_order_status']==$_smarty_tpl->tpl_vars['k']->value||!$_smarty_tpl->tpl_vars['processor_params']->value['canceled_order_status']&&$_smarty_tpl->tpl_vars['k']->value=='I') {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="yandex_returns_enabled"><?php echo $_smarty_tpl->__("yandex_returns_enabled");?>
:</label>
            <div class="controls"><input type="checkbox" name="payment_data[processor_params][returns_enabled]" id="yandex_returns_enabled" value="Y"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['returns_enabled']=="Y") {?> checked="checked"<?php }?>></div>
        </div>

        <div class="control-group">
            <label class="control-label" for="yandex_returned_order_status"><?php echo $_smarty_tpl->__("yandex_returned_order_status");?>
:</label>
            <div class="controls">
                <select name="payment_data[processor_params][returned_order_status]" id="yandex_returned_order_status">
                    <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['returned_order_status']==$_smarty_tpl->tpl_vars['k']->value||!$_smarty_tpl->tpl_vars['processor_params']->value['returned_order_status']&&$_smarty_tpl->tpl_vars['k']->value==fn_get_storage_data('yandex_money_refunded_order_status')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>

    </fieldset>
</div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rus_payments:yandex_money_processor_mws_settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("yandex_payment_types"),'target'=>"#yandex_payment_types_".((string)$_REQUEST['payment_id'])), 0);?>

<div id="yandex_payment_types_<?php echo htmlspecialchars($_REQUEST['payment_id'], ENT_QUOTES, 'UTF-8');?>
" class="in collapse">

    <fieldset>

    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_yandex"><?php echo $_smarty_tpl->__("yandex_payment_yandex");?>
:</label>
        <div class="controls">
            <input type="checkbox" name="payment_data[processor_params][payments][pc]" id="yandex_money_payment_yandex" class="cm-yandex-money-payment-type" value="PC"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payments']&&$_smarty_tpl->tpl_vars['processor_params']->value['payments']['pc']) {?> checked="checked"<?php }?>></div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_card"><?php echo $_smarty_tpl->__("yandex_payment_card");?>
:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][ac]" id="yandex_money_payment_card" class="cm-yandex-money-payment-type" value="AC"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payments']&&$_smarty_tpl->tpl_vars['processor_params']->value['payments']['ac']) {?> checked="checked"<?php }?>></div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_terminal"><?php echo $_smarty_tpl->__("yandex_payment_terminal");?>
:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][gp]" id="yandex_money_payment_terminal" class="cm-yandex-money-payment-type" value="GP"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payments']&&$_smarty_tpl->tpl_vars['processor_params']->value['payments']['gp']) {?> checked="checked"<?php }?>></div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_phone"><?php echo $_smarty_tpl->__("yandex_payment_phone");?>
:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][mc]" id="yandex_money_payment_phone" class="cm-yandex-money-payment-type" value="MC"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payments']&&$_smarty_tpl->tpl_vars['processor_params']->value['payments']['mc']) {?> checked="checked"<?php }?>></div>
    </div>

    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_webmoney"><?php echo $_smarty_tpl->__("yandex_payment_webmoney");?>
:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][wm]" id="yandex_money_payment_webmoney" class="cm-yandex-money-payment-type" value="WM"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payments']&&$_smarty_tpl->tpl_vars['processor_params']->value['payments']['wm']) {?> checked="checked"<?php }?>></div>
    </div>

    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_alfabank"><?php echo $_smarty_tpl->__("yandex_payment_alfabank");?>
:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][ab]" id="yandex_money_payment_alfabank" class="cm-yandex-money-payment-type" value="AB"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payments']&&$_smarty_tpl->tpl_vars['processor_params']->value['payments']['ab']) {?> checked="checked"<?php }?>></div>
    </div>

    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_sberbank"><?php echo $_smarty_tpl->__("yandex_payment_sberbank");?>
:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][sb]" id="yandex_money_payment_sberbank" class="cm-yandex-money-payment-type" value="SB"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payments']&&$_smarty_tpl->tpl_vars['processor_params']->value['payments']['sb']) {?> checked="checked"<?php }?>></div>
    </div>

    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_ma"><?php echo $_smarty_tpl->__("yandex_payment_masterpass");?>
:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][ma]" id="yandex_money_payment_ma" class="cm-yandex-money-payment-type" value="MA"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payments']&&$_smarty_tpl->tpl_vars['processor_params']->value['payments']['ma']) {?> checked="checked"<?php }?>></div>
    </div>

    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_psbank"><?php echo $_smarty_tpl->__("yandex_payment_psbank");?>
:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][pb]" id="yandex_money_payment_psbank" class="cm-yandex-money-payment-type" value="PB"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payments']&&$_smarty_tpl->tpl_vars['processor_params']->value['payments']['pb']) {?> checked="checked"<?php }?>></div>
    </div>
    
    </fieldset>

</div>

<div class="control-group">
    <label class="control-label" for="currency_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <option value="RUB"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="RUB") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_rur");?>
</option>
            <option value="USD"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="USD") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_usd");?>
</option>
            <option value="EUR"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="EUR") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_eur");?>
</option>
            <option value="UAH"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="UAH") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_uah");?>
</option>
            <option value="KZT"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="KZT") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_kzt");?>
</option>
        </select>
    </div>
</div>
<?php }} ?>
