<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:23
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/buttons/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13941831615763fe3f5e86f3-70963571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb5a6ef0daf077d238e6990e8ba6c9a69d8dbcd5' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/buttons/save.tpl',
      1 => 1466167674,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13941831615763fe3f5e86f3-70963571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe3f61d958_68453278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe3f61d958_68453278')) {function content_5763fe3f61d958_68453278($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>
