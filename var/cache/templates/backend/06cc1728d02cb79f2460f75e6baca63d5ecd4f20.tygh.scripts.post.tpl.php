<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:20:02
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/maps_provider/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4223190835762613256ac16-73398048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06cc1728d02cb79f2460f75e6baca63d5ecd4f20' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/maps_provider/hooks/index/scripts.post.tpl',
      1 => 1463494094,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4223190835762613256ac16-73398048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57626132588ef5_32216792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57626132588ef5_32216792')) {function content_57626132588ef5_32216792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/html/cscart_ru_i/app/functions/smarty_plugins/block.inline_script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/maps_provider/map.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/maps_provider/providers/".((string)$_smarty_tpl->tpl_vars['settings']->value['maps_provider']['general']['map_provider']).".js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/maps_provider/func.js"),$_smarty_tpl);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[
(function(_, $) {
    $.extend(_, {
        maps_provider: <?php echo json_encode(unserialize($_smarty_tpl->tpl_vars['settings']->value['maps_provider_']));?>

    });
}(Tygh, Tygh.$));
//]]>
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
