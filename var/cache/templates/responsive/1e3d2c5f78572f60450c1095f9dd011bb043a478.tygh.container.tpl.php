<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:14:28
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11832463745763f7b41f5740-89094497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3d2c5f78572f60450c1095f9dd011bb043a478' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1466167684,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11832463745763f7b41f5740-89094497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763f7b4250219_22425359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763f7b4250219_22425359')) {function content_5763f7b4250219_22425359($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
