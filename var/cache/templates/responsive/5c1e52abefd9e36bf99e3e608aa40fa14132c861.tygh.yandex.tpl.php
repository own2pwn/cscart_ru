<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 13:59:42
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/rus_pickup/components/yandex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11798588095763d81e4eba00-52733532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c1e52abefd9e36bf99e3e608aa40fa14132c861' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/addons/rus_pickup/components/yandex.tpl',
      1 => 1465994897,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11798588095763d81e4eba00-52733532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'group_key' => 0,
    'map_container' => 0,
    'sl_settings' => 0,
    'store_locations' => 0,
    'loc' => 0,
    'shipping' => 0,
    'secondary_currency' => 0,
    'currencies' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763d81e62d7a7_70224186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763d81e62d7a7_70224186')) {function content_5763d81e62d7a7_70224186($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/rus_pickup/yandex.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript" class="cm-ajax-force">
    (function(_, $) {
        var pickup_options = [];
        pickup_options[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
] = {
            'latitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LATITUDE')), ENT_QUOTES, 'UTF-8');?>
,
            'longitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LONGITUDE')), ENT_QUOTES, 'UTF-8');?>
,
            'map_container': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
',
            'group_key': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
,
            'zoom': <?php if (!empty($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_zoom'])) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_zoom'], ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?> 16 <?php }?>,
            'controls': [ 
                'zoomControl',
                'typeSelector',
                'rulerControl',
            ],
            'language': '<?php echo htmlspecialchars(@constant('CART_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
',
            'selectStore': true,
            'storeData': [
                <?php  $_smarty_tpl->tpl_vars["loc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["loc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["loc"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["loc"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["loc"]->key => $_smarty_tpl->tpl_vars["loc"]->value) {
$_smarty_tpl->tpl_vars["loc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["loc"]->key;
 $_smarty_tpl->tpl_vars["loc"]->iteration++;
 $_smarty_tpl->tpl_vars["loc"]->last = $_smarty_tpl->tpl_vars["loc"]->iteration === $_smarty_tpl->tpl_vars["loc"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["st_loc_foreach"]['last'] = $_smarty_tpl->tpl_vars["loc"]->last;
?>
                {
                    'store_location_id' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
',
                    'group_key' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
',
                    'shipping_id' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
',
                    'country' :  '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'latitude' : <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['loc']->value['latitude']), ENT_QUOTES, 'UTF-8');?>
,
                    'longitude' : <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['loc']->value['longitude']), ENT_QUOTES, 'UTF-8');?>
,
                    'name' :  '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['name'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'description' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['description'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'city' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['city'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'country_title' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['country_title'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'pickup_surcharge' : <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['loc']->value['pickup_rate']), ENT_QUOTES, 'UTF-8');?>
,
                    'currency' : '<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol'];?>
',
                    'pickup_address' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_address'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'pickup_phone' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_phone'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'pickup_time' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_time'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
                }
                <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['st_loc_foreach']['last']) {?>,<?php }?>
                <?php } ?>
            ]
        };

        $.ceEvent('on', 'ce.commoninit', function(context) {
            if (context.find('#' + pickup_options[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
].map_container).length) {
               $.cePickup('show', pickup_options[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]);
            }
        });

    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_pickup/components/yandex.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_pickup/components/yandex.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/rus_pickup/yandex.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript" class="cm-ajax-force">
    (function(_, $) {
        var pickup_options = [];
        pickup_options[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
] = {
            'latitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LATITUDE')), ENT_QUOTES, 'UTF-8');?>
,
            'longitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LONGITUDE')), ENT_QUOTES, 'UTF-8');?>
,
            'map_container': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
',
            'group_key': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
,
            'zoom': <?php if (!empty($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_zoom'])) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_zoom'], ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?> 16 <?php }?>,
            'controls': [ 
                'zoomControl',
                'typeSelector',
                'rulerControl',
            ],
            'language': '<?php echo htmlspecialchars(@constant('CART_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
',
            'selectStore': true,
            'storeData': [
                <?php  $_smarty_tpl->tpl_vars["loc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["loc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["loc"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["loc"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["loc"]->key => $_smarty_tpl->tpl_vars["loc"]->value) {
$_smarty_tpl->tpl_vars["loc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["loc"]->key;
 $_smarty_tpl->tpl_vars["loc"]->iteration++;
 $_smarty_tpl->tpl_vars["loc"]->last = $_smarty_tpl->tpl_vars["loc"]->iteration === $_smarty_tpl->tpl_vars["loc"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["st_loc_foreach"]['last'] = $_smarty_tpl->tpl_vars["loc"]->last;
?>
                {
                    'store_location_id' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
',
                    'group_key' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
',
                    'shipping_id' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
',
                    'country' :  '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'latitude' : <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['loc']->value['latitude']), ENT_QUOTES, 'UTF-8');?>
,
                    'longitude' : <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['loc']->value['longitude']), ENT_QUOTES, 'UTF-8');?>
,
                    'name' :  '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['name'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'description' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['description'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'city' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['city'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'country_title' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['country_title'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'pickup_surcharge' : <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['loc']->value['pickup_rate']), ENT_QUOTES, 'UTF-8');?>
,
                    'currency' : '<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol'];?>
',
                    'pickup_address' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_address'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'pickup_phone' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_phone'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'pickup_time' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_time'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
                }
                <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['st_loc_foreach']['last']) {?>,<?php }?>
                <?php } ?>
            ]
        };

        $.ceEvent('on', 'ce.commoninit', function(context) {
            if (context.find('#' + pickup_options[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
].map_container).length) {
               $.cePickup('show', pickup_options[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]);
            }
        });

    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php }?><?php }} ?>
