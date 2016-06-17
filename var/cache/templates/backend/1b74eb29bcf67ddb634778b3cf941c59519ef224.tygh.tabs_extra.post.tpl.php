<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:31
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8816012925763fe473ade94-12294717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b74eb29bcf67ddb634778b3cf941c59519ef224' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl',
      1 => 1466167671,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8816012925763fe473ade94-12294717',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe47416124_58993300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe47416124_58993300')) {function content_5763fe47416124_58993300($_smarty_tpl) {?><div id="content_attachments" class="cm-hide-save-button hidden">

<?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0);?>


<!--content_attachments--></div><?php }} ?>
