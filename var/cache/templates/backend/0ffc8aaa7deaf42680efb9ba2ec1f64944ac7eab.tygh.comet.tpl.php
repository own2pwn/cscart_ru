<?php /* Smarty version Smarty-3.1.21, created on 2016-06-16 11:20:02
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:448345142576261320cf7e7-08184926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ffc8aaa7deaf42680efb9ba2ec1f64944ac7eab' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/common/comet.tpl',
      1 => 1463494094,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '448345142576261320cf7e7-08184926',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_576261320d6169_73468838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576261320d6169_73468838')) {function content_576261320d6169_73468838($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
