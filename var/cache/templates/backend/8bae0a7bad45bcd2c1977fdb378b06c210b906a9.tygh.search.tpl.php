<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:24
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3195234875763fe408c4009-26390859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bae0a7bad45bcd2c1977fdb378b06c210b906a9' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/buttons/search.tpl',
      1 => 1466167674,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3195234875763fe408c4009-26390859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe408e8f80_06823898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe408e8f80_06823898')) {function content_5763fe408e8f80_06823898($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
