<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:30
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/tags/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20532000285763fe466b6786-77278039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c097a36653f0e2dd9e9a2be13b607205bcb5627' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/tags/hooks/products/tabs_content.post.tpl',
      1 => 1466167673,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20532000285763fe466b6786-77278039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe466d4929_46003191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe466d4929_46003191')) {function content_5763fe466d4929_46003191($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product_data']->value,'input_name'=>"product_data",'allow_save'=>true,'object_type'=>"P",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id']), 0);?>

    <?php }?>
<?php }?><?php }} ?>
