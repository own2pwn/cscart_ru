<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:30
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21032834495763fe46cc5bd9-05391265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f33ec767436fe4f110613efd9f19112b3dad14c9' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl',
      1 => 1466167672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21032834495763fe46cc5bd9-05391265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe46cf6602_78060333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe46cf6602_78060333')) {function content_5763fe46cf6602_78060333($_smarty_tpl) {?><div class="hidden" id="content_required_products">

<?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('positions'=>'','input_name'=>"required_products",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'type'=>"links",'placement'=>"right"), 0);?>


</div><?php }} ?>
