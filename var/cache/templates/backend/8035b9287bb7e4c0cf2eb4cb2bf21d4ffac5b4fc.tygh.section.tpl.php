<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:45:58
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/common/section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1567383685763ff1605d402-54455212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8035b9287bb7e4c0cf2eb4cb2bf21d4ffac5b4fc' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/common/section.tpl',
      1 => 1466167674,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1567383685763ff1605d402-54455212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rnd' => 0,
    'section_content' => 0,
    'section_state' => 0,
    'config' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763ff160a8286_56367470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763ff160a8286_56367470')) {function content_5763ff160a8286_56367470($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/cscart_ru_i/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('close'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<div class="clear" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="section-border">
        <?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['section_state']->value) {?>
            <p align="right">
                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"close_section=".((string)$_smarty_tpl->tpl_vars['key']->value))), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("close");?>
</a>
            </p>
        <?php }?>
    </div>
</div><?php }} ?>
