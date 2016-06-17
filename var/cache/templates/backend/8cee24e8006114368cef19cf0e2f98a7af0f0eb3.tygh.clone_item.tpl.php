<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:29
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/buttons/clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15256545115763fe45824824-12966020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cee24e8006114368cef19cf0e2f98a7af0f0eb3' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/buttons/clone_item.tpl',
      1 => 1466167673,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15256545115763fe45824824-12966020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe45858c42_72649250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe45858c42_72649250')) {function content_5763fe45858c42_72649250($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('clone'));
?>
<a class="exicon-clone cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
