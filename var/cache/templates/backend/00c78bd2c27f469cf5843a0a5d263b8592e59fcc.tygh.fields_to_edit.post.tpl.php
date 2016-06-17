<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:48
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13320949425763fe58a02cd1-22666183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00c78bd2c27f469cf5843a0a5d263b8592e59fcc' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1466167671,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13320949425763fe58a02cd1-22666183',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe58a79595_05746247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe58a79595_05746247')) {function content_5763fe58a79595_05746247($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
