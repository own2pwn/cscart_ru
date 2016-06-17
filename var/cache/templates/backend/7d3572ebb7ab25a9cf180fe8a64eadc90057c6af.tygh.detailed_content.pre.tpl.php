<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:50
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/yandex_market/hooks/categories/detailed_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11518075005763fe5a966b11-93646219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d3572ebb7ab25a9cf180fe8a64eadc90057c6af' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/yandex_market/hooks/categories/detailed_content.pre.tpl',
      1 => 1466167673,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11518075005763fe5a966b11-93646219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_data' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe5a9d54d7_22684548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe5a9d54d7_22684548')) {function content_5763fe5a9d54d7_22684548($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('yml','yml_disable_cat'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("yml"),'target'=>"#yandex_market_addon"), 0);?>


<div id="yandex_market_addon" class="in collapse">
    
    <div class="control-group">
        <label class="control-label" for="yml_export"><?php echo $_smarty_tpl->__("yml_disable_cat");?>
:</label>
        <div class="controls">
        <input type="hidden" value="N" name="category_data[yml_disable_cat]"/>
        <input type="checkbox" class="cm-toggle-checkbox" value="Y" name="category_data[yml_disable_cat]" id="yml_export" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['yml_disable_cat']=="Y") {?> checked="checked"<?php }?> />
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['yandex_market']['market_category']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/yandex_market/common/ym_categories_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"category_data[yml_market_category]",'value'=>$_smarty_tpl->tpl_vars['category_data']->value['yml_market_category']), 0);?>
            
    <?php }?>

</div><?php }} ?>
