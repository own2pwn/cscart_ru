<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:50
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/yml_export/hooks/categories/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4912803975763fe5abec5c5-62680047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9616e1abf8d8b1a25e344ae33fd676c3bd5fe19' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/yml_export/hooks/categories/tabs_content.post.tpl',
      1 => 1466167673,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4912803975763fe5abec5c5-62680047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'offer_type_parent_category' => 0,
    'category_data' => 0,
    'offer_type_parent_name' => 0,
    'yml2_offer_types' => 0,
    'offer_type' => 0,
    'offer_name' => 0,
    'yml2_parent_model_select' => 0,
    'yml2_model_category' => 0,
    'features' => 0,
    'yml2_model_select' => 0,
    'field' => 0,
    'feature' => 0,
    'yml2_parent_type_prefix_select' => 0,
    'yml2_type_prefix_select' => 0,
    'yml2_type_prefix_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe5ad635b6_23628443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe5ad635b6_23628443')) {function content_5763fe5ad635b6_23628443($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('yml2_offer_type','yml2_offer_feature_common_model','yml2_product_field_','yml2_product_field_','yml2_model','yml2_offer_feature_common_typeprefix','yml2_product_field_','yml2_product_field_','yml2_type_prefix','yml_export.parent_market_category'));
?>
<div id="content_yml">
    <div id="yml2_addon" class="in collapse">

        <?php echo smarty_function_script(array('src'=>"js/addons/yml_export/yml_tab_categories.js"),$_smarty_tpl);?>


        <div class="control-group">
            <label for="yml2_offer_type" class="control-label"><?php echo $_smarty_tpl->__("yml2_offer_type");?>
:</label>
            <input id="yml2_parent_offer_val" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['offer_type_parent_category']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input id="yml2_offer_type_val" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['yml2_offer_type'], ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="controls">
                <select name="category_data[yml2_offer_type]" id="yml2_offer_type">
                        <?php if (!empty($_smarty_tpl->tpl_vars['offer_type_parent_category']->value)) {?>
                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_offer_type'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.parent_category',array('[default]'=>__($_smarty_tpl->tpl_vars['offer_type_parent_name']->value)));?>
</option>
                        <?php }?>

                        <?php  $_smarty_tpl->tpl_vars["offer_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["offer_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["offer_type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['yml2_offer_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["offer_name"]->key => $_smarty_tpl->tpl_vars["offer_name"]->value) {
$_smarty_tpl->tpl_vars["offer_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["offer_type"]->value = $_smarty_tpl->tpl_vars["offer_name"]->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['offer_type']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['yml2_offer_type']==$_smarty_tpl->tpl_vars['offer_type']->value) {?>selected="selected"<?php }?>>
                                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['offer_name']->value);?>

                            </option>
                        <?php } ?>
                </select>
            </div>
        </div>

        <div id="yml2_model_select_div" class="control-group yml_export">
            <label for="yml2_model_select" class="control-label "><?php echo $_smarty_tpl->__("yml2_offer_feature_common_model");?>
:</label>
            <?php if (!empty($_smarty_tpl->tpl_vars['yml2_parent_model_select']->value)) {?>
                <input id="yml2_parent_model_category" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_parent_model_select']->value[0], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_parent_model_select']->value[1], ENT_QUOTES, 'UTF-8');?>
"/>
            <?php } else { ?>
                <input id="yml2_parent_model_category" type="hidden" value=""/>
            <?php }?>
            <input id="yml2_model_category" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_model_category']->value, ENT_QUOTES, 'UTF-8');?>
"/>

            <div class="controls">
                <select id="yml2_mode_select" name="category_data[yml2_model_select]">
                    <?php if (!empty($_smarty_tpl->tpl_vars['yml2_parent_model_select']->value)) {?>

                        <?php if ($_smarty_tpl->tpl_vars['yml2_parent_model_select']->value[0]=='product') {?>
                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_model_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.parent_category',array('[default]'=>__("yml2_product_field_".((string)$_smarty_tpl->tpl_vars['yml2_parent_model_select']->value[1]))));?>
</option>
                        <?php } else { ?>
                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_model_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.parent_category',array('[default]'=>$_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['yml2_parent_model_select']->value[1]]['description']));?>
</option>
                        <?php }?>
                    <?php } elseif (!empty($_smarty_tpl->tpl_vars['category_data']->value['parent_id'])) {?>
                        <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_model_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.use_parent_category_value');?>
</option>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['yml2_model_select']->value['product_fields'])) {?>
                        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yml2_model_select']->value['product_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                            <option value="product.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['yml2_model_select']->value['type']=='product'&&$_smarty_tpl->tpl_vars['yml2_model_select']->value['value']==$_smarty_tpl->tpl_vars['field']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_product_field_".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</option>
                        <?php } ?>
                        <option value="" disabled>---</option>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars["feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["feature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["feature"]->key => $_smarty_tpl->tpl_vars["feature"]->value) {
$_smarty_tpl->tpl_vars["feature"]->_loop = true;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['yml2_model_select']->value['feature_types'])&&!in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],$_smarty_tpl->tpl_vars['yml2_model_select']->value['feature_types'])) {?>
                        <?php } else { ?>
                            <option value="feature.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['yml2_model_select']->value['type']=='feature'&&$_smarty_tpl->tpl_vars['yml2_model_select']->value['value']==$_smarty_tpl->tpl_vars['feature']->value['feature_id']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php }?>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div id="yml2_model" class="control-group">
            <label for="yml2_model" class="control-label"><?php echo $_smarty_tpl->__("yml2_model");?>
:</label>
            <div class="controls">
                <input type="text" name="category_data[yml2_model]" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['yml2_model'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_model_category']->value))) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_model_category']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/>
            </div>
        </div>

        <div id="yml2_type_prefix_select_div" class="control-group yml_export">
            <label for="yml2_type_prefix_select" class="control-label "><?php echo $_smarty_tpl->__("yml2_offer_feature_common_typeprefix");?>
:</label>
            <?php if (!empty($_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value)) {?>
                <input id="yml2_parent_type_prefix_select" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value[0], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value[1], ENT_QUOTES, 'UTF-8');?>
"/>
            <?php } else { ?>
                <input id="yml2_parent_type_prefix_select" type="hidden" value=""/>
            <?php }?>

            <div class="controls">
                <select id="yml2_type_prefix_select" name="category_data[yml2_type_prefix_select]">
                    <?php if (!empty($_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value)) {?>

                        <?php if ($_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value[0]=='product') {?>
                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_type_prefix_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.parent_category',array('[default]'=>__("yml2_product_field_".((string)$_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value[1]))));?>
</option>
                        <?php } else { ?>
                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_type_prefix_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.parent_category',array('[default]'=>$_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['yml2_parent_type_prefix_select']->value[1]]['description']));?>
</option>
                        <?php }?>
                    <?php } elseif (!empty($_smarty_tpl->tpl_vars['category_data']->value['parent_id'])) {?>
                        <option value="" <?php if (empty($_smarty_tpl->tpl_vars['category_data']->value['yml2_type_prefix_select'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml_export.use_parent_category_value');?>
</option>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['product_fields'])) {?>
                        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['product_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                            <option value="product.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['type']=='product'&&$_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['value']==$_smarty_tpl->tpl_vars['field']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_product_field_".((string)$_smarty_tpl->tpl_vars['field']->value));?>
</option>
                        <?php } ?>
                        <option value="" disabled>---</option>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars["feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["feature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["feature"]->key => $_smarty_tpl->tpl_vars["feature"]->value) {
$_smarty_tpl->tpl_vars["feature"]->_loop = true;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['feature_types'])&&!in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],$_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['feature_types'])) {?>
                        <?php } else { ?>
                            <option value="feature.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['type']=='feature'&&$_smarty_tpl->tpl_vars['yml2_type_prefix_select']->value['value']==$_smarty_tpl->tpl_vars['feature']->value['feature_id']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php }?>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div id="yml2_type_prefix"  class="control-group">
            <label for="yml2_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml2_type_prefix");?>
:</label>
            <div class="controls">
                <input type="text" name="category_data[yml2_type_prefix]" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['yml2_type_prefix'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_type_prefix_category']->value))) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_type_prefix_category']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/yml_export/common/yml_categories_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"category_data[yml2_market_category]",'value'=>$_smarty_tpl->tpl_vars['category_data']->value['yml2_market_category']), 0);?>


        <div class="control-group cm-no-hide-input">
            <label for="yml2_parent_market_category" class="control-label"><?php echo $_smarty_tpl->__("yml_export.parent_market_category");?>
:</label>
            <input type="hidden" value="N" name="category_data[yml2_parent_market_category]"/>
            <div class="controls" id="yml2_parent_market_category">
                <input type="checkbox" name="category_data[yml2_parent_market_category]" value="Y" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['yml2_parent_market_category']=="Y") {?> checked="checked"<?php }?> class="cm-toggle-checkbox"/></br>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
