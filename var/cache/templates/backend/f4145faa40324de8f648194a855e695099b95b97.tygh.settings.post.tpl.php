<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:14:11
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/twigmo/hooks/block_manager/settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3529794115763f7a3b2cc07-50284941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4145faa40324de8f648194a855e695099b95b97' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/twigmo/hooks/block_manager/settings.post.tpl',
      1 => 1466167673,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3529794115763f7a3b2cc07-50284941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_twigmo_location' => 0,
    'html_id' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763f7a3b976e2_51358560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763f7a3b976e2_51358560')) {function content_5763f7a3b976e2_51358560($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['is_twigmo_location']->value) {?>
    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_hide_header"><?php echo $_smarty_tpl->__('twgadmin_hide_header');?>
:</label>
        <div class="controls">
            <input type="hidden" name="block_data[properties][hide_header]" value="N">
            <input type="checkbox" class="checkbox" name="block_data[properties][hide_header]" value="Y" id="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_hide_header" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_header']&&$_smarty_tpl->tpl_vars['block']->value['properties']['hide_header']=="Y") {?>checked="checked"<?php }?> >
        </div>
    </div>
<?php }?><?php }} ?>
