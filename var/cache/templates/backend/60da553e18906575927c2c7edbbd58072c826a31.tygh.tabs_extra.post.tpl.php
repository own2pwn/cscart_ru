<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:56
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20978486265763fe602b0844-59433282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60da553e18906575927c2c7edbbd58072c826a31' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl',
      1 => 1466167671,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20978486265763fe602b0844-59433282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe602fa695_93253739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe602fa695_93253739')) {function content_5763fe602fa695_93253739($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
