<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 13:59:42
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/rus_pickup/hooks/checkout/shipping_method.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13146924405763d81e10c666-60386145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4500b9ec30bb070766bf88a8498d3e83584ccbb' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/rus_pickup/hooks/checkout/shipping_method.post.tpl',
      1 => 1465994897,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13146924405763d81e10c666-60386145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'group_key' => 0,
    'cart' => 0,
    'shipping' => 0,
    'display' => 0,
    'shipping_id' => 0,
    'select_store' => 0,
    'display_type' => 0,
    'store_count' => 0,
    'map_container' => 0,
    'store' => 0,
    'old_store_id' => 0,
    'selected' => 0,
    'delivery_time' => 0,
    'rate' => 0,
    'strong_begin' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763d81e4da912_28474823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763d81e4da912_28474823')) {function content_5763d81e4da912_28474823($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('available','view_all','view_all','phone','rus_pickup.work_time','description','view_on_map','phone','rus_pickup.work_time','description','view_all','available','view_all','view_all','phone','rus_pickup.work_time','description','view_on_map','phone','rus_pickup.work_time','description','view_all'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']&&$_smarty_tpl->tpl_vars['shipping']->value['module']=='pickup') {?>

    <?php if ($_smarty_tpl->tpl_vars['display']->value=="radio") {?>

        <?php $_smarty_tpl->tpl_vars["store_count"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["old_store_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['select_store']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value], null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']) {?>
            <?php $_smarty_tpl->tpl_vars["display_type"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["display_type"] = new Smarty_variable("ML", null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars["store_locations"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['display_type']->value!='L') {?>
            <?php $_smarty_tpl->tpl_vars["map_container"] = new Smarty_variable("map_canvas_".((string)$_smarty_tpl->tpl_vars['group_key']->value), null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/rus_pickup/components/yandex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>

        <div class="clearfix ty-checkout-select-store__map-full-div">
        <?php if ($_smarty_tpl->tpl_vars['display_type']->value=='M') {?>
            <?php if ($_smarty_tpl->tpl_vars['store_count']->value>1) {?>
                <h3><?php echo $_smarty_tpl->__("available");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_count']->value, ENT_QUOTES, 'UTF-8');?>

                <div data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-checkout-select-store__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>__("view_all")), 0);?>
</div>
                </h3>
            <?php }?>
            <div class="ty-checkout-select-store__map-full" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php } elseif ($_smarty_tpl->tpl_vars['display_type']->value=='ML') {?>
            <div class="ty-checkout-select-store__map" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_type']->value!='M') {?>
        <?php if ($_smarty_tpl->tpl_vars['display_type']->value=='L') {?>
            <div class="ty-checkout-select-store__list">
        <?php } else { ?>
            <div class="ty-checkout-select-store">
        <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['store_count']->value>1&&$_smarty_tpl->tpl_vars['display_type']->value!='L') {?>
                <div data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-checkout-select-store__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>__("view_all")), 0);?>
</div>
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
                    <div class="ty-one-store">
                        <input type="radio" name="select_store[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']||$_smarty_tpl->tpl_vars['store_count']->value==1) {?>checked="checked"<?php }?> id="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-one-store__radio-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
  ty-valign cm-map-select-store">
                        <div class="ty-one-store__label">
                        <label for="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-valign"  >
                            <p class="ty-one-store__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0);?>
)<?php }?></p>
                            <div class="ty-one-store__description">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['city'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');
}?></br>
                            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {
echo $_smarty_tpl->__("phone");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</br><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {
echo $_smarty_tpl->__("rus_pickup.work_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>
</br><?php }?>     
                            <?php if ($_smarty_tpl->tpl_vars['store']->value['description']) {?>
                                <a id="sw_store_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-cart-content__detailed-link detailed-link"><?php echo $_smarty_tpl->__("description");?>
</a>
                                <div id="store_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden">
                                <?php echo $_smarty_tpl->tpl_vars['store']->value['description'];?>

                                </div>
                                </br>
                            <?php }?>
                            </div>
                        </label>

                    <?php if ($_smarty_tpl->tpl_vars['display_type']->value!='L') {?>           
                        <a data-ca-latitude="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
" data-ca-longitude="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
" data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-map-view-location" ><?php echo $_smarty_tpl->__("view_on_map");?>
</a>
                    <?php }?>
                        </div>
                    </div>
                <?php } ?>
            </div>
    <?php } else { ?>

        <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']||$_smarty_tpl->tpl_vars['store_count']->value==1) {?>
                    <div class="ty-one-store__select-store">

                        <p class="ty-one-store__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0);?>
)<?php }?></p>
                        <div class="ty-one-store__description">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['city'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');
}?></br>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {
echo $_smarty_tpl->__("phone");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</br><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {
echo $_smarty_tpl->__("rus_pickup.work_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>
</br><?php }?>     
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['description']) {?>
                            <a id="sw_store_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-cart-content__detailed-link detailed-link"><?php echo $_smarty_tpl->__("description");?>
</a>
                            <div id="store_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden">
                            <?php echo $_smarty_tpl->tpl_vars['store']->value['description'];?>

                            </div>
                            </br>
                        <?php }?>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['store_count']->value>1) {?>
                            <div data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-checkout-select-store__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>__("view_all")), 0);?>
</div>
                        <?php }?>
                    </div>
            <?php }?>
            <input type="radio" class="ty-one-store__radio-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
  hidden" name="select_store[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']||$_smarty_tpl->tpl_vars['store_count']->value==1) {?>checked="checked"<?php }?> id="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php } ?>

    <?php }?>

    </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</option>
    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
        <p>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');?>

        </p>
    <?php }?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_pickup/hooks/checkout/shipping_method.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_pickup/hooks/checkout/shipping_method.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']&&$_smarty_tpl->tpl_vars['shipping']->value['module']=='pickup') {?>

    <?php if ($_smarty_tpl->tpl_vars['display']->value=="radio") {?>

        <?php $_smarty_tpl->tpl_vars["store_count"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["old_store_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['select_store']->value[$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value], null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']) {?>
            <?php $_smarty_tpl->tpl_vars["display_type"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["display_type"] = new Smarty_variable("ML", null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars["store_locations"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['data']['stores'], null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['display_type']->value!='L') {?>
            <?php $_smarty_tpl->tpl_vars["map_container"] = new Smarty_variable("map_canvas_".((string)$_smarty_tpl->tpl_vars['group_key']->value), null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/rus_pickup/components/yandex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>

        <div class="clearfix ty-checkout-select-store__map-full-div">
        <?php if ($_smarty_tpl->tpl_vars['display_type']->value=='M') {?>
            <?php if ($_smarty_tpl->tpl_vars['store_count']->value>1) {?>
                <h3><?php echo $_smarty_tpl->__("available");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_count']->value, ENT_QUOTES, 'UTF-8');?>

                <div data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-checkout-select-store__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>__("view_all")), 0);?>
</div>
                </h3>
            <?php }?>
            <div class="ty-checkout-select-store__map-full" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php } elseif ($_smarty_tpl->tpl_vars['display_type']->value=='ML') {?>
            <div class="ty-checkout-select-store__map" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_type']->value!='M') {?>
        <?php if ($_smarty_tpl->tpl_vars['display_type']->value=='L') {?>
            <div class="ty-checkout-select-store__list">
        <?php } else { ?>
            <div class="ty-checkout-select-store">
        <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['store_count']->value>1&&$_smarty_tpl->tpl_vars['display_type']->value!='L') {?>
                <div data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-checkout-select-store__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>__("view_all")), 0);?>
</div>
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
                    <div class="ty-one-store">
                        <input type="radio" name="select_store[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']||$_smarty_tpl->tpl_vars['store_count']->value==1) {?>checked="checked"<?php }?> id="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-one-store__radio-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
  ty-valign cm-map-select-store">
                        <div class="ty-one-store__label">
                        <label for="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-valign"  >
                            <p class="ty-one-store__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0);?>
)<?php }?></p>
                            <div class="ty-one-store__description">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['city'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');
}?></br>
                            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {
echo $_smarty_tpl->__("phone");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</br><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {
echo $_smarty_tpl->__("rus_pickup.work_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>
</br><?php }?>     
                            <?php if ($_smarty_tpl->tpl_vars['store']->value['description']) {?>
                                <a id="sw_store_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-cart-content__detailed-link detailed-link"><?php echo $_smarty_tpl->__("description");?>
</a>
                                <div id="store_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden">
                                <?php echo $_smarty_tpl->tpl_vars['store']->value['description'];?>

                                </div>
                                </br>
                            <?php }?>
                            </div>
                        </label>

                    <?php if ($_smarty_tpl->tpl_vars['display_type']->value!='L') {?>           
                        <a data-ca-latitude="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
" data-ca-longitude="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
" data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-map-view-location" ><?php echo $_smarty_tpl->__("view_on_map");?>
</a>
                    <?php }?>
                        </div>
                    </div>
                <?php } ?>
            </div>
    <?php } else { ?>

        <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']||$_smarty_tpl->tpl_vars['store_count']->value==1) {?>
                    <div class="ty-one-store__select-store">

                        <p class="ty-one-store__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']) {?>(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0);?>
)<?php }?></p>
                        <div class="ty-one-store__description">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['city'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');
}?></br>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {
echo $_smarty_tpl->__("phone");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</br><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {
echo $_smarty_tpl->__("rus_pickup.work_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>
</br><?php }?>     
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['description']) {?>
                            <a id="sw_store_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-cart-content__detailed-link detailed-link"><?php echo $_smarty_tpl->__("description");?>
</a>
                            <div id="store_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden">
                            <?php echo $_smarty_tpl->tpl_vars['store']->value['description'];?>

                            </div>
                            </br>
                        <?php }?>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['store_count']->value>1) {?>
                            <div data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-checkout-select-store__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>__("view_all")), 0);?>
</div>
                        <?php }?>
                    </div>
            <?php }?>
            <input type="radio" class="ty-one-store__radio-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
  hidden" name="select_store[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']||$_smarty_tpl->tpl_vars['store_count']->value==1) {?>checked="checked"<?php }?> id="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php } ?>

    <?php }?>

    </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</option>
    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="show") {?>
        <p>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['rate']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['strong_begin']->value, ENT_QUOTES, 'UTF-8');?>

        </p>
    <?php }?>

<?php }
}?><?php }} ?>
