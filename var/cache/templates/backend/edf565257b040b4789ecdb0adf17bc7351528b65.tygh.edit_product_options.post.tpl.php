<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:45:57
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/yml_export/hooks/product_options/edit_product_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2510219875763ff15d76d95-01057800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edf565257b040b4789ecdb0adf17bc7351528b65' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/yml_export/hooks/product_options/edit_product_options.post.tpl',
      1 => 1466167673,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2510219875763ff15d76d95-01057800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763ff15dd94a6_96168371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763ff15dd94a6_96168371')) {function content_5763ff15dd94a6_96168371($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('yml_export.yml2_option_variant'));
?>
<div class="control-group cm-non-cb">
    <label class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_option_variant");?>
</label>
    <div class="controls">
        <input type="text" name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_variant]" value="<?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'], ENT_QUOTES, 'UTF-8');
}?>" class="input-medium" />
    </div>
</div>
<?php }} ?>
