<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:29
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/buttons/multiple_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6718411935763fe45799e85-51059252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4dd36c447f876205a062274d7a8fcb72ff7fc21' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/buttons/multiple_buttons.tpl',
      1 => 1466167674,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6718411935763fe45799e85-51059252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tag_level' => 0,
    'only_delete' => 0,
    'hide_add' => 0,
    'on_add' => 0,
    'item_id' => 0,
    'hide_clone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe457fb4d0_93246518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe457fb4d0_93246518')) {function content_5763fe457fb4d0_93246518($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["tag_level"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['tag_level']->value)===null||$tmp==='' ? "1" : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['only_delete']->value!="Y") {
if (!$_smarty_tpl->tpl_vars['hide_add']->value) {
echo $_smarty_tpl->getSubTemplate ("buttons/add_empty_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value)."); ".((string)$_smarty_tpl->tpl_vars['on_add']->value),'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0);
}
if (!$_smarty_tpl->tpl_vars['hide_clone']->value) {
echo $_smarty_tpl->getSubTemplate ("buttons/clone_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", true);",'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0);
}
}
echo $_smarty_tpl->getSubTemplate ("buttons/remove_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('only_delete'=>$_smarty_tpl->tpl_vars['only_delete']->value,'but_class'=>"cm-delete-row"), 0);?>
<?php }} ?>
