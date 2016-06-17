<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:29
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5245839895763fe46002094-91062724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e617bf0aab12e524373822b40f8b32fddb311d79' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl',
      1 => 1466167673,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5245839895763fe46002094-91062724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe460acdf9_52905178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe460acdf9_52905178')) {function content_5763fe460acdf9_52905178($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"product_data",'object_data'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>

<?php }?>
<?php }} ?>
