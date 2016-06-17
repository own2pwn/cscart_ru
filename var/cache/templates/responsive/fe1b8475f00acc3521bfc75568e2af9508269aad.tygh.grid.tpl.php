<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:14:28
         compiled from "/var/www/html/cscart_ru_i/design/themes/responsive/templates/views/block_manager/render/grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8081888495763f7b419e3e1-37981724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe1b8475f00acc3521bfc75568e2af9508269aad' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/themes/responsive/templates/views/block_manager/render/grid.tpl',
      1 => 1466167684,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8081888495763f7b419e3e1-37981724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'parent_grid' => 0,
    'grid' => 0,
    'content' => 0,
    'fluid_width' => 0,
    'width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763f7b41eec34_79256145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763f7b41eec34_79256145')) {function content_5763f7b41eec34_79256145($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>
    <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width']>0) {?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable(fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['grid']->value['width'], null, 0);?>
    <?php }?>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A"&&$_smarty_tpl->tpl_vars['content']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
        <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['fluid_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] : $tmp), null, 0);?>
        <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
" >
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
<?php }?><?php }} ?>
