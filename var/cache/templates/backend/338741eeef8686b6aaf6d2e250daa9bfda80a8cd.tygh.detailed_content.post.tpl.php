<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:30
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/yandex_market/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7599620955763fe46343402-43137370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '338741eeef8686b6aaf6d2e250daa9bfda80a8cd' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/yandex_market/hooks/products/detailed_content.post.tpl',
      1 => 1466167673,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7599620955763fe46343402-43137370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'product_data' => 0,
    'show_update_for_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe464f4f30_58706443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe464f4f30_58706443')) {function content_5763fe464f4f30_58706443($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('yml','yml_brand','yml_model','yml_type_prefix','yml_sales_notes','yml_country','yml_manufacturer_warranty','tt_addons_yandex_market_hooks_products_detailed_content_post_yml_manufacturer_warranty','yml_seller_warranty','tt_addons_yandex_market_hooks_products_detailed_content_post_yml_seller_warranty','yml_export_yes','yml_true','yml_false','yml_cost','yml_adult','yml_false','yml_true','yml_delivery','yml_true','yml_false','yml_store','yml_true','yml_false','yml_pickup','yml_true','yml_false','yml_bid','yml_cbid'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("yml"),'target'=>"#yandex_market_addon"), 0);?>


<div id="yandex_market_addon" class="in collapse">
    <div class="control-group cm-no-hide-input">
        <label for="product_description_brand" class="control-label <?php if (($_smarty_tpl->tpl_vars['addons']->value['yandex_market']['includes_required_fields']=='Y'&&$_smarty_tpl->tpl_vars['addons']->value['yandex_market']['export_type']=='vendor_model')) {?>cm-required<?php }?>"><?php echo $_smarty_tpl->__("yml_brand");?>
:</label>
        <div class="controls"><input type="text" name="product_data[yml_brand]" id="product_description_brand" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_brand'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>
</div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_model" class="control-label <?php if (($_smarty_tpl->tpl_vars['addons']->value['yandex_market']['includes_required_fields']=='Y'&&$_smarty_tpl->tpl_vars['addons']->value['yandex_market']['export_type']=='vendor_model')) {?>cm-required<?php }?>"><?php echo $_smarty_tpl->__("yml_model");?>
:</label>
        <div class="controls"><input type="text" name="product_data[yml_model]" id="product_description_model" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_model'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>

        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['yandex_market']['type_prefix']=="Y") {?>
        <div class="control-group cm-no-hide-input">
            <label for="product_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml_type_prefix");?>
:</label>
            <div class="controls"><input type="text" name="product_data[yml_type_prefix]" id="product_type_prefix" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_type_prefix'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>

            </div>
        </div>  
    <?php }?>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_yml_sales_notes" class="control-label"><?php echo $_smarty_tpl->__("yml_sales_notes");?>
:</label>
        <div class="controls"><input type="text" name="product_data[yml_sales_notes]" id="product_description_yml_sales_notes" size="50" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_sales_notes'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>
</div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['yandex_market']['market_category']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/yandex_market/common/ym_categories_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"product_data[yml_market_category]",'value'=>$_smarty_tpl->tpl_vars['product_data']->value['yml_market_category']), 0);?>
            
    <?php }?>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_origin_country" class="control-label"><?php echo $_smarty_tpl->__("yml_country");?>
:</label>
        <div class="controls"><input type="text" name="product_data[yml_origin_country]" id="product_description_origin_country" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_origin_country'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>
</div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_manufacturer_warranty" class="control-label"><?php echo $_smarty_tpl->__("yml_manufacturer_warranty");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_addons_yandex_market_hooks_products_detailed_content_post_yml_manufacturer_warranty")), 0);?>
:</label>
        <div class="controls"><input type="text" name="product_data[yml_manufacturer_warranty]" id="product_description_manufacturer_warranty" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_manufacturer_warranty'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>
</div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_seller_warranty" class="control-label"><?php echo $_smarty_tpl->__("yml_seller_warranty");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_addons_yandex_market_hooks_products_detailed_content_post_yml_seller_warranty")), 0);?>
:</label>
        <div class="controls"><input type="text" name="product_data[yml_seller_warranty]" id="product_description_seller_warranty" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_seller_warranty'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>'product','name'=>"update_all_vendors[product]"), 0);?>
</div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_yml_export_yes" class="control-label"><?php echo $_smarty_tpl->__("yml_export_yes");?>
:</label>
        <div class="controls">
            <select name="product_data[yml_export_yes]" id="product_description_yml_export_yes">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_export_yes']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_true");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_export_yes']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_false");?>
</option>
            </select>
        </div>
    </div>
	
	<?php if ($_smarty_tpl->tpl_vars['addons']->value['yandex_market']['local_delivery_cost']=="Y") {?>
	    <div class="control-group cm-no-hide-input">
            <label for="product_description_cost" class="control-label"><?php echo $_smarty_tpl->__("yml_cost");?>
:</label>
            <div class="controls">
			    <input type="text" name="product_data[yml_cost]" id="product_description_cost" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_cost'], ENT_QUOTES, 'UTF-8');?>
" class="input-small" />
            </div>
        </div>
	<?php }?>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_adult" class="control-label"><?php echo $_smarty_tpl->__("yml_adult");?>
:</label>
        <div class="controls">
            <select name="product_data[yml_adult]" id="product_description_adult">
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_adult']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_false");?>
</option>
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_adult']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_true");?>
</option>
            </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_delivery" class="control-label"><?php echo $_smarty_tpl->__("yml_delivery");?>
:</label>
        <div class="controls">
            <select name="product_data[yml_delivery]" id="product_description_delivery">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_delivery']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_true");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_delivery']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_false");?>
</option>
            </select>
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_store" class="control-label"><?php echo $_smarty_tpl->__("yml_store");?>
:</label>
        <div class="controls">
            <select name="product_data[yml_store]" id="product_description_store">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_store']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_true");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_store']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_false");?>
</option>
            </select>
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_pickup" class="control-label"><?php echo $_smarty_tpl->__("yml_pickup");?>
:</label>
        <div class="controls">
            <select name="product_data[yml_pickup]" id="product_description_pickup">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_pickup']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_true");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml_pickup']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml_false");?>
</option>
            </select>
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_bid" class="control-label"><?php echo $_smarty_tpl->__("yml_bid");?>
:</label>
        <div class="controls">
            <input type="text" name="product_data[yml_bid]" id="product_description_bid" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_bid'], ENT_QUOTES, 'UTF-8');?>
" class="input-small" />
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_cbid" class="control-label"><?php echo $_smarty_tpl->__("yml_cbid");?>
:</label>
        <div class="controls">
            <input type="text" name="product_data[yml_cbid]" id="product_description_cbid" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['yml_cbid'], ENT_QUOTES, 'UTF-8');?>
" class="input-small" />
        </div>
    </div>

</div>
<?php }} ?>
