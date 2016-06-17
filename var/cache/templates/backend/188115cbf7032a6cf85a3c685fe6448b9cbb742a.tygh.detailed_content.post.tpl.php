<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:50
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18915884385763fe5a9e28b0-60433099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '188115cbf7032a6cf85a3c685fe6448b9cbb742a' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl',
      1 => 1466167671,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18915884385763fe5a9e28b0-60433099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe5aa5fe12_39357474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe5aa5fe12_39357474')) {function content_5763fe5aa5fe12_39357474($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_category'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE"))||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("comments_and_reviews"),'target'=>"#discussion_category_setting"), 0);?>

<fieldset>
	<div id="discussion_category_setting" class="in collapse">
		<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"C",'title'=>__("discussion_title_category")), 0);?>

	</div>
</fieldset>
<?php }?><?php }} ?>
